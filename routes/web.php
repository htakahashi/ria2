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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/orders', 'HomeController@orders')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// resources

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('posts', 'PostController');
Route::resource('permissions','PermissionController');

