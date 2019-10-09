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

Route::get('/', 'HomeController@index');
Route::get('/carta', 'CartaController@CartaView');
Route::get('/carta/{cat}', 'CartaController@CategoryView');
Route::get('/carta/{cat}/{product_slug}/{product_id}', 'CartaController@ProductoView');
Route::get('/nosotros', 'HomeController@AboutView');
Route::get('/checkout', 'CheckoutController@CheckoutView');
Route::get('/finish', 'CheckoutController@FinishView');
Route::get('/home', 'HomeController@index')->name('home');