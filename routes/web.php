<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.pages.home.home');
});

Route::get('/cart', function () {
    return view('front.pages.cart.cart');
});

Route::get('/checkout', function () {
    return view('front.pages.checkout.checkout');
});

Route::get('/contact', function () {
    return view('front.pages.contact.contact');
});

Route::get('/faqs', function () {
    return view('front.pages.faqs.faqs');
});

Route::get('/product', function () {
    return view('front.pages.product.product');
});

Route::get('/products', function () {
    return view('front.pages.products.products');
});