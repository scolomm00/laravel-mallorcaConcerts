<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //La primera linea dice en que vista quiero tener disponible 
        //el contenido definido en la segunda linea.

        //La segunda linea digo que archivo quiero tener disponible en la vista.
        //Se pueden añadir todas las vistas que quiera.

        view()->composer([
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\ProductCategories' 
        );

        view()->composer([
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\Taxes' 
        );

        view()->composer([
            'front.pages.products.index'],
            'App\Http\ViewComposers\Front\ProductCategories' 
        );

        view()->composer([
            'front.pages.checkout.index'],
            'App\Http\ViewComposers\Front\PaymentMethods' 
        );
        
    }
}
