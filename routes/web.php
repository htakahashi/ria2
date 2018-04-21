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
    return view('store');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/admin', 'AdminController@index');

Route::get('/items/{item}', 'ItemsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
