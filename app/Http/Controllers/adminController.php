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
      $this->middleware('auth:api');
    }

    public function orders(){
       return view('admin');
    }
}
