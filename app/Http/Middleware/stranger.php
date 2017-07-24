<?php

namespace App\Http\Middleware;

use Closure;

class before
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
        Stranger::hit();
        return $next($request);
    }
}
