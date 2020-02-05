<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation;

class RedirectIfAuthenticated
{
    protected AuthManager $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next, ?string $guard = null): HttpFoundation\Response
    {
        if ($this->auth->guard($guard)->check()) {
            return new JsonResponse([
                'message' => 'Already authenticated',
            ]);
        }

        return $next($request);
    }
}
