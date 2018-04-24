<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SessionsController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password', 'remember');

        if (Auth::attempt($credentials)) {
            return back();
        }
    }
}