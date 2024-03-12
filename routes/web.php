<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/menu',function()
{
    return view('menu');
})->name('menu');

Route::get('/detail',function()
{
    return view('product-detail');
});

Route::get('/shoppingCart',function()
{
    return view('shopping-cart');
})->name('cart');

Route::get('/profile',function()
{
    return view('customerProfile');
})->name('profile');

Route::get('/order-history',function()
{
    return view('order-history');
})->name('order-history');

Route::get('/checkout',function()
{
     return view('checkout');
}
)->name('checkout');
