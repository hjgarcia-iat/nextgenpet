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
     * @param  \Closure $next
     *
     * @return mixed
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        if (str_contains($request->getRequestUri(), 'instructor')) {
            if (!auth()->check()) {
                auth()->logout();
                return redirect(route('login.create'))->with('error', 'Please login to continue!');
            }

            if(auth()->check() and !auth()->user()->hasRole(['nextgen_pet_user', 'admin', 'super_admin'])) {
                auth()->logout();
                return redirect(route('login.create'))->with('error', 'Please login to continue!');
            }
        }

        return $next($request);
    }
}
