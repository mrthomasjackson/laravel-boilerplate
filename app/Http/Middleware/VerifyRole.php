<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class VerifyRole
{
    protected $auth;
    /**
     * Creates a new instance of the middleware.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @param  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if ($this->auth->guest() || !$request->user()->hasRole($role)) {
            abort(403, 'Access Denied');
        }
        return $next($request);
    }
}
