<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Product related routes

Route::get('/products', 'ProductsController@index');
Route::get('/view/{product}', 'ProductsController@show');
Route::get('/cart', 'ProductsController@showCart');
Route::get('/cart/{id}', 'ProductsController@addItemToCart');


// API routes for user 
Route::post('/login', 'Auth\RegisterController@login');
Route::post('/register', 'Auth\RegisterController@register');