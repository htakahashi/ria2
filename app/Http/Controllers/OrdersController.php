<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\User;

class OrdersController extends Controller
{
    public function index()
    {
    	if (auth()->user() && auth()->user()->role == 0) {
			return redirect('/');
		}
		else{

			$numOfProducts = DB::table('products')->count();
	        return view('orders.admin', compact('numOfProducts') );
		}
	}


    public function show(Product $product) {

    	if (auth()->user() && auth()->user()->role == 0) {
			return redirect('/');
		}
		else {

	    	$users = $product->users;

	    	$numOfProducts = DB::table('products')->count();

	        return view('orders.admin', compact('users', 'product', 'numOfProducts') );
		}
    }

}
