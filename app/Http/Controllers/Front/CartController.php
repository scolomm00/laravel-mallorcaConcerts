<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
// use App\Models\Cart;
// use App\Http\Requests\Front\CartRequest;

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
}