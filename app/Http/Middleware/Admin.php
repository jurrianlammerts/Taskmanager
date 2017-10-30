<?php

namespace todoapp\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Request;

class CheckAdmin
{
    public function handle($request, Closure $next, $guard = null)
    {
        //Kijken of admin is
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        } else if (!Auth::guard($guard)->user()->is_admin) {
            return redirect()->to('/')->withError('Permission Denied');
        }

        // Anders door naar volgende middleware of route functie
        return $next($request);
    }
}
