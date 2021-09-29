<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccountStatus
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
        if (auth('worker')->check()) {
            if (auth()->user()->status == 0) {
                auth()->logout();
                return redirect()->route('worker.showLogin')->with('InactiveAccount', 'Your Account Profile is under locked, Kindly Contact Administrator to login to your Dashboard');
            }
        }
        return $next($request);
    }
}
