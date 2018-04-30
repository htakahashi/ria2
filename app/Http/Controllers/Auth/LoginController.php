<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // public function (){
    //     $currentUserRole = \Auth::user()->role;
    //     //if the current role is admin assign the admin role
    //     if($currentUserRole == 'Admin'){
    //             protected $redirectTo = '/admin';
    //     }
    //     $currentUserRole = \Auth::user()->role;
    //     //if the current role is admin assign the admin role
    //     if($currentUserRole == 'customer'){
    //         protected $redirectTo = '/customer';
    //     }
    // }
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
