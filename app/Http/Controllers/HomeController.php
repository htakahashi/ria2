<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        $currentUserRole = \Auth::user()->role;
        //if the current role is admin assign the admin role
        if($currentUserRole == 'Admin'){
                return view('/admin');
        }
        $currentUserRole = \Auth::user()->role;
        //if the current role is admin assign the admin role
        if($currentUserRole == 'customer'){
            return view('/customer');
        }
        // return view('home');
    }
}
