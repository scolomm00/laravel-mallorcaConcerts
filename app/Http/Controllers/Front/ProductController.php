<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Front\ProductRequest;
use Debugbar;

class ProductController extends Controller
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {

        $view = View::make('front.pages.products.index')
        ->with('products', $this->product->where('active', 1)->where('visible', 1)->orderBy('day', 'asc')->get());
        
        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function show(Product $product){

        $view = View::make('front.pages.product.index')
        ->with('product', $product);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function orderFilter($filter){

        $products = $this->product
        ->join('prices', 'prices.product_id', '=', 'products.id')
        ->where('products.active', 1)
        ->where('products.visible', 1)
        ->orderBy('prices.base_price', $filter)
        ->select('products.*')
        ->get();

        $view = View::make('front.pages.products.index')
        ->with('products', $products)
        ->with('filter', $filter);

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }
}