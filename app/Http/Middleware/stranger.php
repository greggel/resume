<?php

namespace App\Http\Middleware;

use Closure;

class stranger
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
        strangerVisitor::hit();
        return $next($request);
    }
}
