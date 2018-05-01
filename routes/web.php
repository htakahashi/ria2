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

// Shop
Route::get('/', function () {
    return view('shop');
});

// Generic
Route::get('generic', function () {
    return view('generic');
});

// Elements
Route::get('elements', function () {
    return view('elements');
});

// Admin
Route::get('admin', function(){
	return view('admin');
})->middleware('auth','admin');

// Customer
Route::get('customer', function(){
	return view('customer');
})->middleware('auth','customer');
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
