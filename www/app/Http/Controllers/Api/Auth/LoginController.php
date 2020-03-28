<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            "email" => "required",
            "password" => "required",
        ]);

        $token = auth()->attempt($request->only(["email", "password"]));

        if (!$token) {
            return response()->json([
                "errors" => [
                    "email" => ["Sorry we couldn\"t sign you in with those details."]
                ]
            ], 422);
        }

        return $this->returnResponse([
            "user" => new UserResource($request->user()),
            "token" => Str::random(25),
            "is_admin" => true
        ], 200);
    }
}
