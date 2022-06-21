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

        $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);

    }

    public function plusCart(){

        $cart = $this->cart->create([
            'price_id' => request('price_id'),
            'fingerprint' => 1,
            'active' => 1
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', '1')
        ->where('fingerprint', $cart->fingerprint)
        ->get();

        $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function minusCart(){

        $cart = $this->cart->update([
            'active' => 0
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'),'price_id')
        ->groupByRaw('price_id')
        ->where('active', '1')
        ->where('fingerprint', $cart->fingerprint)
        ->get();

        $sections = View::make('front.pages.cart.index')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
    

    public function sumPrice(){

        $carts = $this->cart->price->sum('base_price as total_price')->where('active', 1)->where('fingerprint', 1);

        $sections = View::make('front.pages.cart.index')
        ->groupByRaw('total_price')
        ->with('carts', $carts)
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json([
            'content' => $sections['content'],
        ]);

    }
    
}

