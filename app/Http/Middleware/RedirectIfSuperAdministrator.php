<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectIfSuperAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        } elseif ($request->user()->role_id == 1) {
            return redirect()->route('superadmin.home');
        }
        return $next($request);
    }
}
