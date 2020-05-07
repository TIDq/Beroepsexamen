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

Route::get('/home', 'Homecontroller@index')->name('home');
Route::post('/product/{id}', 'ShopController@addToCart');
Route::resource('product', 'ShopController');
Route::get('/cart', 'ShopController@shoppingCart');
Route::get('/orders', 'OrderController@index')->name('orders');
