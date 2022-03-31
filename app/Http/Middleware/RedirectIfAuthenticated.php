<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class RedirectIfAuthenticated.
 */
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
        if (auth()->guard($guard)->check()) {
            if(is_mobile($request->header('user-agent')) == true){
                return redirect()->route(home_route(),'project_id');
            }else{
                return redirect()->route(home_route());
            }

        }

        return $next($request);
    }
}
