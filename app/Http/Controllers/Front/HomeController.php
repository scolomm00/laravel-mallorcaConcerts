<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
// use App\Models\Faq;
// use App\Http\Requests\Front\FaqRequest;

class HomeController extends Controller
{

    protected $home;
    
    public function index()
    {

        $view = View::make('front.pages.home.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }
}