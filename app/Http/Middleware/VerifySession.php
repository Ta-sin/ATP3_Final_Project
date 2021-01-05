<?php

namespace App\Http\Middleware;

// use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;

class VerifySession 
{
    /**
     * The URIs that should be excluded from User verification.
     *
     * 
     */

    public function handle($request, Closure $next)
    {

        if(session()->has('email')){
            return $next($request);
       }else{
           $request->session()->flash('msg', 'Invalid Resource Request, Please Login First.');
           return redirect()->route('hotel.login');
       }
    }
    
}
