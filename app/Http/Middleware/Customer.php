<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'customer') {
        	return redirect('/customer');
    		}
				elseif (Auth::check() && Auth::user()->role == 'admin') {
				 	return redirect('/admin');
    		}

    }
}
