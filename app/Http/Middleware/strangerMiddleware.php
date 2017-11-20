<?php

namespace App\Http\Middleware;

use Closure;
use App\Stranger;
use Request;

class strangerMiddleware
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
        //strangerVisitor::hit();
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = file_get_contents('https://freegeoip.net/json/' . $ip);
        $response = json_decode($response, true);

        Stranger::create([
                  'ip'   => $_SERVER['REMOTE_ADDR'],
                  'created_at' => date('Y-m-d'),
                  'browser' => $_SERVER['HTTP_USER_AGENT'],
                  'http_referer' => Request::server('HTTP_REFERER'),
                  'lat' => $response['latitude'],
                  'lng' => $response['longitude'],
                  'city'=> $response['city'],
                  'regionName' => $response['region_name'],
              ]);
        return $next($request);
    }
}
