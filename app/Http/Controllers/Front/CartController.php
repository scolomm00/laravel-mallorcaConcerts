<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Debugbar;


class CartController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    
    public function index()
    {

        $view = View::make('front.pages.cart.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function store(Request $request)
    {

        for($i = 0; $i < request('quantity'); $i++) {

            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint' => 1,
                'active' => 1
            ]);
        }
     
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', '1')
        ->where('fingerprint', $cart->fingerprint)
        ->get();
        
        $totals = $this->cart
        ->where('carts.fingerprint', $cart->fingerprint)
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);

    }

    // public function plusCart($fingerprint, $price_id){

    //     $cart = $this->cart->create([
    //         'price_id' => $price_id,
    //         'fingerprint' => $fingerprint,
    //         'active' => 1
    //     ]);

    //     $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
    //     ->groupByRaw('price_id')
    //     ->where('sale_id', null)
    //     ->where('active', '1')
    //     ->where('fingerprint', 1)
    //     ->get();

    //     $totals = $this->cart
    //     ->where('carts.fingerprint', $cart->fingerprint)
    //     ->where('carts.active', 1)
    //     ->where('carts.sale_id', null)
    //     ->join('prices', 'prices.id', '=', 'carts.price_id')
    //     ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
    //     ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
    //     ->first();

    //     $sections = View::make('front.pages.cart.index')
    //     ->with('carts', $carts)
    //     ->with('fingerprint', $fingerprint)
    //     ->with('base_total', $totals->base_total)
    //     ->with('tax_total', ($totals->total - $totals->base_total))
    //     ->with('total', $totals->total)
    //     ->renderSections();

    //     return response()->json([
    //         'content' => $sections['content'],
    //     ]);
    // }

        
    public function plusCart($fingerprint, $price_id)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $fingerprint,
            'active' => 1
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
            ->groupByRaw('price_id')
            ->where('active' , 1)
            ->where('fingerprint', 1)
            ->get();

        $totals = $this->cart
            ->where('carts.fingerprint', $fingerprint)
            ->where('carts.active', 1)
            ->where('carts.sale_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();

        $sections = View::make('front.pages.cart.index')
            ->with('carts', $carts)
            ->with('fingerprint', $fingerprint)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();


        return response()->json([
            'content' => $sections['content'],
        ]); 

    }

    public function minusCart($fingerprint, $price_id){

        $cart = $this->cart->where('price_id', $price_id)
        ->where('fingerprint', $fingerprint)
        ->where('active', 1)
        ->first();
        
        $cart->active = 0;
        $cart->save();

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', '1')
        ->where('fingerprint', $fingerprint)
        ->get();

        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.sale_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
        ->first();

        $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $fingerprint)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
    
}

