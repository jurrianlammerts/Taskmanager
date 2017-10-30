<?php

namespace todoapp\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Kijken of is ingelogd
        if (Auth::user()) {
            // Zo ja, redirect naar home
            return redirect('/home');
        }

        // Zo nee, ga door naar volgende middleware of route
        return $next($request);
    }
}
