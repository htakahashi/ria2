<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customerController extends Controller
{
    public function __construct(){
    	$this->middleware("customer");
    }

    public function customer(){
    	if (Auth::user()->role == 1) {
    		return view('customer');
    	}
    	else{
    	 return view('orders');
    	}
    }
}
