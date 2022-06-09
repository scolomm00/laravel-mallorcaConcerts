<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\ProductCategory;

class ProductCategories
{
    static $composed;

    //Esta función se ejecuta cuando la vista se carga.
    //Inyección de dependencias.

    public function __construct(ProductCategory $product_categories)
    {
        //Llamamos al modelo y le damos un alias.

        $this->product_categories = $product_categories;
    }
    
    public function compose(View $view)
    {
        //Static: Si le doy un valor a una variable,
        //la variable se guarda en la memoria y no se puede cambiar.

        if(static::$composed)
        {
            return $view->with('product_categories', static::$composed);
        }

        //Este valor que se le da al static::$composed ya no se puede cambiar.

        static::$composed = $this->product_categories->where('active', 1)->orderBy('title', 'asc')->get();

        //Le doy el valor al view.

        $view->with('product_categories', static::$composed);

    }
}
