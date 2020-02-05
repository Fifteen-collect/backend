<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(): string
    {
        return 'nickname';
    }

    public function showLoginForm(): void
    {
        throw new NotFoundHttpException();
    }

    protected function loggedOut(Request $request): JsonResponse
    {
        return new JsonResponse([
            'message' => 'success'
        ]);
    }

    protected function authenticated(Request $request, $user): JsonResponse
    {
        return new JsonResponse([
            'message' => 'success'
        ]);
    }
}
