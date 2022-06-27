<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\PaymentMethod;

class PaymentMethods
{
    static $composed;

    //Esta función se ejecuta cuando la vista se carga.
    //Inyección de dependencias.

    public function __construct(PaymentMethod $payment_methods)
    {
        //Llamamos al modelo y le damos un alias.

        $this->payment_methods = $payment_methods;
    }

    public function compose(View $view)
    {
        //Static: Si le doy un valor a una variable,
        //la variable se guarda en la memoria y no se puede cambiar.

        if(static::$composed)
        {
            return $view->with('payment_methods', static::$composed);
        }

        //Este valor que se le da al static::$composed ya no se puede cambiar.

        static::$composed = $this->payment_methods->where('active', 1)->orderBy('title', 'asc')->get();

        //Le doy el valor al view.

        $view->with('payment_methods', static::$composed);

    }
}
