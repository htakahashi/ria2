<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CommentController extends Controller
{
    function create () {
         //return 'create';
        return view('child');
    }

    function comment ( Request $request ) {
           dd($request ->email, $request ->comment); 

    }
};

