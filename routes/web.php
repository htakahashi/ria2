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

Route::get('/', 'ProductsController@show');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/thanks/{id}', 'ProductsController@thanks');

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', 'AdminController@index');

Route::get('/customer', 'CustomerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/createAdminRole', 'CreateRolesPermissionsController@createAdminRole');
Route::get('/createCustomerRole', 'CreateRolesPermissionsController@createCustomerRole');
Route::get('/assignRole', 'CreateRolesPermissionsController@assignRole');

Route::get('/products', 'ProductsController@show');
Route::get('/products/{id}', 'ProductsController@showOrderForm');
Route::post('/submitOrder/{id}', 'OrdersController@store');


