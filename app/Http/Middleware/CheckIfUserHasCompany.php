<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfUserHasCompany
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
        if(auth()->user()) {
            if( auth()->user()->company != null) {
                return $next($request);
            }
            return redirect()->route('companies.create');
        }
        return redirect()->route('welcome.guest');
    }
}

