<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function __construct(){
    	$this->middleware("customer");
    }

    public function customer(){
    	 return view('customer');
    }
}
