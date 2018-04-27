<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class adminController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function orders(){
    	$orders = Post::all();
        
        return view('/orders', compact('orders'));
    }
}
