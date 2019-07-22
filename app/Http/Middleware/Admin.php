<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 

class Admin
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
        error_log("Inside the handle function");
        if(Auth::check()){
            error_log("In the first if");
            if(Auth::user()->isAdmin() == true){

                error_log("Inside the closure");
                 return $next($request);


            }

        }

        return redirect('/');

    }
}
