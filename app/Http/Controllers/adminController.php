<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class adminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function orders(){
    	if (Auth::user()->role == 0) {
    		$orders = Post::all();
        
        	return view('/orders', compact('orders'));
    	}
    	else{
    	 return view('customer');
    	}    	
    }
}
