<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectIfAdministrator
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
        } elseif ($request->user()->role_id == 2) {
            return redirect()->route('admin.home');
        }

        return $next($request);
    }
}
