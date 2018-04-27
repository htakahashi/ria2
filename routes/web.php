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

Route::get('/redCheckout', function () {
    return view('redCheckout');
});

Route::get('/yellowCheckout', function () {
    return view('yellowCheckout');
});

Route::get('/orangeCheckout', function () {
    return view('orangeCheckout');
});

Route::get('/pinkCheckout', function () {
    return view('pinkCheckout');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});



Route::post('/orders', 'PostController@store');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'adminController@orders');
Route::get('/customer', 'customerController@customer');


// resources
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('posts', 'PostController');
Route::resource('permissions','PermissionController');