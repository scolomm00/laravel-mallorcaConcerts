<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Http\Requests\Admin\SaleRequest;
use Debugbar;

class SaleController extends Controller
{ 

    protected $sale;

    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }
    
    public function index()
    {

        $view = View::make('admin.pages.sales.index')
                ->with('sale', $this->sale)
                ->with('sales', $this->sale->where('active', 1)->get());

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

    public function create()
    {

       $view = View::make('admin.pages.sales.index')
        ->with('sale', $this->sale)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(SaleRequest $request)
    {            

        $sale = $this->sale->updateOrCreate([
                'id' => request('id')],[
                'sale_num' => request('sale_num'),
                'total_base_price' => request('total_tax_price'),
                'total_price' => request('total_price'),
                'customer_id' => request('customer_id'),
                'payment_method_id' => request('payment_method_id'),
                'active' => 1
        ]);

        $view = View::make('admin.pages.sales.index')
        ->with('sales', $this->sale->where('active', 1)->get())
        ->with('sale', $this->sale)
        ->renderSections();        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $sale->id,
        ]);
    }

    public function edit(sale $sale)
    {
        $view = View::make('admin.pages.sales.index')
        ->with('sale', $sale)
        ->with('sales', $this->sale->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Sale $sale){

    }

    public function destroy(Sale $sale)
    {
        $sale->active = 0;
        $sale->save();

        $view = View::make('admin.pages.sales.index')
            ->with('sale', $this->sale)
            ->with('sales', $this->sale->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}