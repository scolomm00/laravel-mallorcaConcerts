<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Fingerprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    protected $cart;
    protected $customer;
    protected $sale;
    protected $fingerprint;

    public function __construct(Cart $cart, Customer $customer, Sale $sale, Fingerprint $fingerprint)
    {
        $this->cart = $cart;
        $this->customer = $customer;
        $this->sale = $sale;
        $this->fingerprint = $fingerprint;
    }

    public function index(Request $request)
    {

        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $view = View::make('front.pages.checkout.index')
        ->with('fingerprint', $request->cookie('fp'))
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total);

        if(request()->ajax()) {

            $sections = $view->renderSections(); 

            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function show()
    {
        $sections = View::make('front.pages.purchases.index')->renderSections();        

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function store(Request $request)
    {            

        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $sale = $this->sale->latest()->first();

        if (isset($sale->sale_num) && str_contains($sale->sale_num, date('ymd'))) {
            $sale_num = $sale->sale_num + 1;
        } else {
            $sale_num = date('ymd') . '0001';
        }


        $customer = $this->customer->updateOrCreate([
                'email' => request('email')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'phone' => request('phone'),
                'city' => request('city'),
                'postal_code' => request('postal_code'),
                'address' => request('address'),
                'visible' => 1,
                'active' => 1,
        ]);

        $fingerprint = $this->fingerprint->where('fingerprint', $request->cookie('fp'))->update([
            'customer_id' => $customer->id,
        ]);
        
      
        $sale = $this->sale->create([
            'customer_id' => $customer->id,
            'sale_num' => $sale_num,
            'total_base_price' => $totals->total_base_price,
            'total_tax_price' => $totals->total - $totals->total_base_price,
            'total_price' => $totals->total,
            'payment_method_id' => request('payment_method_id'),
            'date_emision' => date('y-m-d'),
            'time_emision' => date('H:i:s'),
            'active' => 1,
        ]);

        $cart = $this->cart
        ->where('fingerprint', request('fingerprint'))
        ->where('sale_id', null)
        ->where('active', 1)
        ->update([
            'sale_id' => $sale->id,
            'customer_id' => $customer->id
        ]);

        $sections = View::make('front.pages.purchases.index')->renderSections();        

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}