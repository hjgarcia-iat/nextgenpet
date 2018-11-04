<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

class PageAuthChecker
{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure                 $next
	 *
	 * @return mixed
	 * @throws AuthenticationException
	 */
    public function handle($request, Closure $next)
    {

        if(str_contains($request->getRequestUri(), 'instructor') and !auth()->check()) {
		    throw new AuthenticationException('Please login to continue!');
	    }

        if(!auth()->user()->hasRole(['nextgen_pet_user', 'admin', 'super_admin'])) {

            auth()->logout();

            throw new AuthenticationException('Please login to continue!');
        }

        return $next($request);
    }
}
