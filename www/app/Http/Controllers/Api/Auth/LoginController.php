<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $token = auth()->attempt($request->all());

        if (!$token) {
            return response()->json([
                'errors' => [
                    'email' => ['Sorry we couldn\'t sign you in with those details.']
                ]
            ], 422);
        }

        return $this->returnResponse([
            'user' => new UserResource($request->user()),
            'token' => Str::random(25),
            'is_admin' => true
        ], 200);
    }
}
