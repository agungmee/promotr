<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserAuth
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
        if (Auth::check()) { // cek apakah user sudah login?
            return $next($request); // kalau sudah requestnya dilanjutin
        }

        return redirect('/login'); // kalo ga ya balik dulu ke login
        
    }
}
