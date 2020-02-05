<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function authenticate(Request $request, array $guards): void
    {
        if (parent::authenticate($request, $guards) && !$request->expectsJson()) {
            throw new AuthenticationException(
                __('login.required'), $guards
            );
        }
    }
}
