<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');


    	if (Auth::user() && Auth::user()->role == 0) {
    		$orders = Post::all();

        	return view('orders', compact('orders'));
    	}
      if (Auth::user()->role == 1) {
    		return view('customer');
    	}
    	 return view('home');

    }
}
