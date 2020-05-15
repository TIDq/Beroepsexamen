<?php

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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::post('/product/{id}', 'ShopController@addToCart');
Route::resource('product', 'ShopController');
Route::resource('order', 'OrderController');
Route::get('/cart', 'CartController@show');
Route::get('/orders', 'OrderController@index')->name('orders');
