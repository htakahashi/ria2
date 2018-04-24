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

Route::get('/products', function () {
    return view('products');
});


Route::get('/checkout/1', function () {
	$potatoGun = 'Potato Launcher';
	$price = 'Price: $200';

    return view('checkout', compact('potatoGun', 'price'));
});

Route::get('/checkout/2', function () {
	$potatoGun = 'Spud Gun';
	$price = 'Price: $350';

    return view('checkout', compact('potatoGun', 'price'));
});

Route::get('/checkout/3', function () {
	$potatoGun = 'Starch Cannon';
	$price = 'Price: $999';

    return view('checkout', compact('potatoGun', 'price'));
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Route::post('/saveorder', 'OrderController@store');

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/error', function () {
	$potatoGun = 'Dude! We are sorry, your card number did not register.';
	$price = 'Please try again.';

    return view('checkout', compact('potatoGun', 'price'));
});




//AUTHENTICATION NEEDED FOR THESE VIEWS
Route::get('/loggedin', function () {
	$userrole = DB::table('users')->select('role')->where('email', Auth::user()->email)->get();

	foreach ($userrole as $perm) {
		$permission = $perm->role;
	}

	if ($permission == 0) {
    	return view('customer', compact('userrole'));
	} else { //to view the admin page
		$orderslist = DB::table('orders')->latest()->get();

		return view('admin', compact('userrole', 'orderslist'));
	}
});



