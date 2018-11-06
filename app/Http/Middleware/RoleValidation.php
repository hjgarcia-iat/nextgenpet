<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

/**
 * Class RoleValidation
 * @package App\Http\Middleware
 */
class RoleValidation
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->hasRole('nextgen_pet_user')) abort(404);

        return $next($request);
    }
}