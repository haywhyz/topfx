<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authmoderator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->utype === 2) {
            return $next($request);
        }
        if (Auth::user()->utype === 1) {
            return redirect()->route('admin');
        }
        if (Auth::user()->utype === 3) {
            return redirect()->route('user');
        }

        
    }
}