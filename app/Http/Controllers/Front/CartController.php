<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Http\Requests\Front\CartRequest;

class CartController extends Controller
{

    protected $cart;
    
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

    public function store(CartRequest $request)
    {

        $cart = $this->cart->create([
                'id' => request('id')],[
                'price_id' => request('price_id'),
                'fingerprint_id' => request('fingerprint_id'),
                'sales_id' => request('sales_id'),
                'customer_id' => request('customer_id'),
                'active' => 1,
            ]);

        return response()->json([
            'cart' => $cart,
        ]);

    }
}