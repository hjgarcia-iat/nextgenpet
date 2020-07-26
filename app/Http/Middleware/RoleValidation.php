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
        if (auth()->user()->hasRole('admin')) {
            return redirect(route('admin.index'));
        }

        return $next($request);
    }
}