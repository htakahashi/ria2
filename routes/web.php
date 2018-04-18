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
    return view('welcome');
});


Route::get('/cozy', function () {
    return view('cozy');
});
Route::get('/home', function () {
    return view('cozy');
});

Route::get('/cart', 'ProductsListController@index');
Route::get('/cart/{item}', 'ProductsListController@show');
Route::get('/products/{cart}', 'ProductsListController@showCart');
Route::get('/thanks/{thanks}', 'ProductsListController@thanksPage');
Route::get('/auth/permissions', 'DemoController@demo');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/products', 'ShippingController@store');


Auth::routes();


