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

Route::get('/item1', function() {
    session()->put('item', '1');
    session()->put('price', '34.99');
    return view('item1');
   });

Route::get('/item2', function() {
    session()->put('item', '2');
    session()->put('price', '24.99');
    return view('item2');
   });

Route::get('/item3', function() {
    session()->put('item', '3');
    session()->put('price', '100+');
    return view('item3');
   });

Route::get('/thanks', function() {
   return view('thanks');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/order', 'OrderController@store');
