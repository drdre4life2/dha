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

//Route::get('/', function () {
//    return view('users.home');
//});
Route::match(['get', 'post'], '/', ['uses' => 'UserController@index', 'as' => 'home']);
Route::match(['get', 'post'], '/shop', ['uses' => 'ShoppingController@index', 'as' => 'shop']);
Route::match(['get', 'post'], '/checkout', ['uses' => 'ShoppingController@show', 'as' => 'checkout']);
