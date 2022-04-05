<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard='superadmin')

    {

      if (!auth()->guard($guard)->check()) {

        return redirect('/superadmin/login');
      }
        return $next($request);
    }
}
