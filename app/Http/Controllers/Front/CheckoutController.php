<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    protected $cart;
    protected $customer;
    protected $sale;

    public function __construct(Cart $cart, Customer $customer, Sale $sale)
    {
        $this->cart = $cart;
        $this->customer = $customer;
        $this->sale = $sale;
    }

    public function index($fingerprint)
    {

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $view = View::make('front.pages.checkout.index')
        ->with('fingerprint', $fingerprint)
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

        $customer = $this->customer->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'email' => request('email'),
                'phone' => request('phone'),
                'city' => request('city'),
                'postal_code' => request('postal_code'),
                'address' => request('address'),
                'visible' => 1,
                'active' => 1,
        ]);

        $saleNum = $this->sale->latest()->first()->sale_num;

        if (str_contains($saleNum, date('ymd'))) {
            $saleNum += 1;
        } else {
            $saleNum = date('ymd') . '0001';
        }

        $sale = $this->sale->create([
            'customer_id' => $customer->id,
            'sale_num' => $saleNum,
            'total_base_price' => request('total_base_price'),
            'total_tax_price' => request('total_tax_price'),
            'total_price' => request('total_price'),
            'payment_method_id' => request('payment_method_id'),
            'date_emision' => date('y-m-d'),
            'time_emision' => date('H:i:s'),
            'active' => 1,
        ]);


        $cart = $this->cart
        ->where('fingerprint', request('fingerprint'))
        ->where('sale_id', null)
        ->where('active', 1)
        ->update(['sale_id' => $sale->id]);

        $sections = View::make('front.pages.purchases.index')->renderSections();        

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}