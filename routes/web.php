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
/* Page displays */
Route::get('/', function () {
    return view('welcome');
});
Route::get('products', function () {
    return view('products');
});
Route::get('thanks', function () {
    return view('thanks');
});
Route::get('checkout', function () {
    return view('checkout');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('customer', function () {
    return view('customer');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
