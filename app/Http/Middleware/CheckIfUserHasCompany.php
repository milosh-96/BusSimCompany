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
        if(auth()->user() && auth()->user()->company) {
            return redirect()->route(
                'companies.details',
                auth()->user()->company->permalink(true)
            );
        }
        return $next($request);
    }
}
