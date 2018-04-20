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

Route::get('/cart', 'ProductsListController@index');
Route::get('/cart/{item}', 'ProductsListController@show');
Route::get('/product/{cart}', 'ProductsListController@show');

// Route::get('/cart/{item}', function($id){
//     // $item = DB::table('products_lists')->find($id);
//     // return view('products.show', compact('item'));
// });

Auth::routes();

// Route::get('/products', 'ProductsListController@index');

