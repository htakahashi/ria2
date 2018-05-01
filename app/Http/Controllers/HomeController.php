<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $userId = \Auth::id();
        $user = User::find($userId);
        if ($user->isAdmin == 1) {
          $orders = DB::table('orders')->latest()->get();
          return view('admin', compact('orders'));
        }
         return view('user');
     }
}
