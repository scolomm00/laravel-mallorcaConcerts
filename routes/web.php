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


});

Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('home');

Route::get('/carrito', 'App\Http\Controllers\Front\CartController@index')->name('cart');
Route::get('/pago', 'App\Http\Controllers\Front\CheckoutController@index')->name('checkout');

Route::get('/contacto', 'App\Http\Controllers\Front\ContactController@index')->name('contact');
Route::post('/contacto', 'App\Http\Controllers\Front\ContactController@store')->name('contacts_store');

Route::get('/faqs', 'App\Http\Controllers\Front\FaqController@index')->name('faqs');

Route::get('/productos', 'App\Http\Controllers\Front\ProductController@index')->name('products');
Route::get('/producto', 'App\Http\Controllers\Front\ProductController@show')->name('product');