<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $response =  $next($request);   
         return $response
                ->withHeaders([
                    'Cache-Control' => 'no-store, no-cache, must-revalidate',
                    'Pragma'=> 'no-cache',
                    'Expires' => '0'
                ]);
        // return $next($request);
    }
}
