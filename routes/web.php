<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    Route::resource('faqs', 'App\Http\Controllers\Admin\FaqController', [
        'parameters' => [
            'faqs' => 'faq', 
        ],
        'names' => [
            'index' => 'faqs',
            'create' => 'faqs_create',
            'edit' => 'faqs_edit',
            'store' => 'faqs_store',
            'destroy' => 'faqs_destroy',
            'show' => 'faqs_show',
        ]
    ]);

    Route::resource('productos/categorias', 'App\Http\Controllers\Admin\ProductCategoryController', [
        'parameters' => [
            'categorias' => 'product_category', 
        ],
        'names' => [
            'index' => 'product_categories',
            'create' => 'product_categories_create',
            'edit' => 'product_categories_edit',
            'store' => 'product_categories_store',
            'destroy' => 'product_categories_destroy',
            'show' => 'product_categories_show',
        ]
    ]);

    Route::resource('productos', 'App\Http\Controllers\Admin\ProductController', [
        'parameters' => [
            'productos' => 'product', 
        ],
        'names' => [
            'index' => 'products',
            'create' => 'products_create',
            'edit' => 'products_edit',
            'store' => 'products_store',
            'destroy' => 'products_destroy',
            'show' => 'products_show',
        ]
    ]);

    Route::resource('usuarios', 'App\Http\Controllers\Admin\UserController', [
        'parameters' => [
            'usuarios' => 'user', 
        ],
        'names' => [
            'index' => 'users',
            'create' => 'users_create',
            'edit' => 'users_edit',
            'store' => 'users_store',
            'destroy' => 'users_destroy',
            'show' => 'users_show',
        ]
    ]);

    Route::resource('clientes', 'App\Http\Controllers\Admin\CustomerController', [
        'parameters' => [
            'clientes' => 'customer', 
        ],
        'names' => [
            'index' => 'customers',
            'create' => 'customers_create',
            'edit' => 'customers_edit',
            'store' => 'customers_store',
            'destroy' => 'customers_destroy',
            'show' => 'customers_show',
        ]
    ]);

    Route::resource('ventas', 'App\Http\Controllers\Admin\SaleController', [
        'parameters' => [
            'ventas' => 'sale', 
        ],
        'names' => [
            'index' => 'sales',
            'create' => 'sales_create',
            'edit' => 'sales_edit',
            'store' => 'sales_store',
            'destroy' => 'sales_destroy',
            'show' => 'sales_show',
        ]
    ]);

});

Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('front_home');

Route::get('/carrito', 'App\Http\Controllers\Front\CartController@index')->name('front_cart');
Route::post('/carrito', 'App\Http\Controllers\Front\CartController@store')->name('cart_store');
Route::get('/carrito/plus/{price_id}', 'App\Http\Controllers\Front\CartController@plusCart')->name('plus_cart');
Route::get('/carrito/minus/{price_id}', 'App\Http\Controllers\Front\CartController@minusCart')->name('minus_cart');

Route::get('/pago', 'App\Http\Controllers\Front\CheckoutController@index')->name('front_checkout');

Route::post('/confirmacion', 'App\Http\Controllers\Front\CheckoutController@store')->name('front_purchase');

Route::get('/contacto', 'App\Http\Controllers\Front\ContactController@index')->name('front_contact');
Route::post('/contacto', 'App\Http\Controllers\Front\ContactController@store')->name('contacts_store');

Route::get('/faqs', 'App\Http\Controllers\Front\FaqController@index')->name('front_faqs');

Route::get('/productos', 'App\Http\Controllers\Front\ProductController@index')->name('front_products');
Route::get('/productos/{product}', 'App\Http\Controllers\Front\ProductController@show')->name('products_show');
Route::get('/productos/categorias/{category}', 'App\Http\Controllers\Front\ProductCategoryController@show')->name('front_product_category');

Route::get('/productos/order/{filter}', 'App\Http\Controllers\Front\ProductController@orderFilter')->name('front_product_price_order');

Route::post('/fingerprint', 'App\Http\Controllers\Front\FingerprintController@store');