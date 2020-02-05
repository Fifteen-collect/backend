<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data): Validator
    {
        return \Validator::make(
            $data,
            [
                'nickname' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'password' => [
                    'required',
                    'string',
                    'min:8',
                ],
            ]
        );
    }

    protected function create(array $data): User
    {
        return User::create(
            [
                'nickname' => $data['nickname'],
                'password' => Hash::make($data['password']),
            ]
        );
    }

    protected function registered(Request $request, $user): JsonResponse
    {
        return new JsonResponse(
            [
                'status' => 'success',
                'user' => $user,
            ]
        );
    }

    public function showRegistrationForm(): void
    {
        throw new NotFoundHttpException();
    }
}
