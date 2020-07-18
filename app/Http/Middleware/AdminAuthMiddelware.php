<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddelware
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
        if (!admin()) {
            return \Redirect::route("/");
        }

        if (admin()->user_type === 'A') {
            return \Redirect::route("dashboard");
        }
        return $next($request);
    }
}
