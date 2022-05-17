<?php

namespace App\Providers;
//Importamos archivos que necesitamos
use View;
use Jenssegers\Agent\Agent;
use Illuminate\Support\ServiceProvider;

// Creamos una clase que hereda de ServiceProvider
class AgentServiceProvider extends ServiceProvider
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
        
    // 
    public function boot()
    {
        $agent = new Agent();
        
        View::share('agent', $agent);
    }
}
