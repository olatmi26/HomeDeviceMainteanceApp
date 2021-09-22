<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackHistoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control', 'nocache,no-store,max-age=0;must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Wed, 01 Jan 1970 00:00:00 GMT');
    }
    // 
}
