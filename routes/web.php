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

Route::get('/', function () {
    return view('cozy');
});


Route::get('/cozy', function () {
    return view('cozy');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/welcome', function () {
    return view('process');
});

Route::get('/cart', 'ProductsListController@index');
Route::get('/orders', 'ShippingController@index');
Route::get('/cart/{item}', 'ProductsListController@show');
Route::get('/products/error/{error}', 'ProductsListController@error');
Route::get('/products/{cart}', 'ProductsListController@showCart');
Route::get('/thanks/{thanks}', 'ProductsListController@thanksPage');
Route::get('/auth/permissions', 'DemoController@assignUsers');

Route::get('/users', 'DemoController@assignUsers');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/products', 'ShippingController@store');


Auth::routes();


