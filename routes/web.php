<?php
/*
|--------------------------------------------------------------------------
| Welcome page route (only accessible to a customer)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {

	if (auth()->user() && auth()->user()->role == 1) {
		return redirect('/admin');
	}
	else {

		$products = DB::table('products')
			->inRandomOrder()
			->limit(4)
			->get();

	    return view('welcome', compact('products'));
	}
});

/*
|--------------------------------------------------------------------------
| Products routes
|--------------------------------------------------------------------------
*/
Route::get('/products', 'ProductsController@index');//shows all the products

Route::get('/products/{product}', 'ProductsController@show');//shows a single product


/*
|--------------------------------------------------------------------------
| order processing routes
|--------------------------------------------------------------------------
*/
Route::get('/checkout/{product}', 'ProductsController@checkout');//shows the checkout page (create)

Route::post('/checkout/{product}/order', 'ProductsController@update_user'); //(update)

Route::get('/checkout/{product}/thanks', 'ProductsController@thanks');	//(store)


/*
|--------------------------------------------------------------------------
| admin dashboard route (only accessible to admin)
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'OrdersController@index');//view admin page

Route::get('/admin/{product}', 'OrdersController@show');//view admin page with orders


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::post('/userlogin', 'SessionsController@authenticate');

Auth::routes();


/*
|--------------------------------------------------------------------------
| logged in feedback page route
|--------------------------------------------------------------------------
*/
Route::get('/log', function () {

	if (auth()->user() && auth()->user()->role == 1) {
		$admin = true;
	}
	else {
		$admin = false;
	}
	$user = auth()->user();
	return view('log', compact('admin', 'user'));
	
});