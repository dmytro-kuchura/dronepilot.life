<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UsersController extends BaseApiController
{
    public function login(LoginClientRequest $request)
    {
        try {
            $data = $request->all();

            if (!Auth::attempt($data)) {
                Log::warning('Login error!', [$request->all()]);
                return response()->json([
                    'message' => 'Please enter a correct username and password.',
                ], $this->unauthorisedStatus);
            }

            $user = Auth::user();

            $success = [
                'message' => 'success',
                'token' => ['access_token' => $user->createToken('AppClient')->accessToken]
            ];

            $repository = new IPHistoryRepository();
            $repository->create(['user' => $user->id]);

            Log::info('Login successful!', ['email' => $data['email'], 'user_id' => $user->getAttribute('id')]);

            return response()->json($success, $this->successStatus);
        } catch (\Exception $exception) {
            Log::error('Login error!', ['message' => $exception->getMessage(), 'file' => $exception->getFile(), 'line' => $exception->getLine()]);
            return response()->json([
                'message' => 'Internal server error... Please contact our support.',
            ], 500);
        }
    }

    public function register(RegisterClientRequest $request)
    {
        $input = $request->all();

        $userRepository = new UserRepository();
        $clientRepository = new ClientRepository();

        try {
            $user = $userRepository->create($input);

            $input['user_id'] = $user->id;

            $client = $clientRepository->create($input);

            $success = [
                'token' => $user->createToken('AppClient')->accessToken,
                'email' => $user->email,
                'client' => $client->id,
            ];
        } catch (Exception $exception) {
            Log::error('Register error!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);
        }

        Log::info('Register successful!', [$input]);
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();

        $repository = new ClientRepository();

        $client = $repository->getById($user->getAttribute('id'));

        $data = [
            "id" => $user->getAttribute('id'),
            "avatar_url" => $client["avatar"],
            "first_name" => $client["first_name"],
            "last_name" => $client["last_name"],
            "email" => $user->getAttribute('email'),
            "country" => $client["country"],
            "phone" => $client["phone"],
            "time_zone" => $client["timezone"],
            "localTime" => Carbon::now(),
            "status" => $client["status"],
        ];

        return $this->returnResponse($data);
    }

    public function update(UpdateClientRequest $request)
    {
        $userRepository = new UserRepository();
        $clientRepository = new ClientRepository();

        try {
            $userRepository->update($request->all(), Auth::user()->id);
            $clientRepository->update($request->all(), Auth::user()->id);
        } catch (Exception $exception) {
            Log::error('Update profile error!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'request' => $request->all()
            ]);

            dd($exception->getMessage());

            return response()->json(['success' => false], $this->badRequestStatus);
        }

        Log::info('Update profile successful!', [$request->all()]);

        return response()->json(['success' => true], $this->successStatus);
    }

    public function resetPassword(PasswordResetRequest $request)
    {
        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            Log::error('Can\'t find a user for reset password!', $request->all());

            return response()->json([
                'success' => false,
                'message' => 'We can\'t find a user with that email address!'
            ], 404);
        }

        $repository = new PasswordResetRepository();
        $result = $repository->create($request->all());

        Mail::to($request->get('email'))->send(new ResetPassword(config("app.url") . '/reset-password/' .$result->token));

        return response()->json([
            'message' => 'We have mailed your password reset link!'
        ]);
    }

    public function verifyToken(Request $request)
    {
        $repository = new PasswordResetRepository();
        $passwordReset = $repository->getByToken($request->route('token'));

        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], $this->notFoundStatus);

        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], $this->badRequestStatus);
        }

        return response()->json($passwordReset);
    }

    public function reset(UpdatePasswordResetRequest $request)
    {
        $repository = new PasswordResetRepository();
        $passwordReset = $repository->getByToken($request->get('token'));

        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], $this->notFoundStatus);

        $userRepository = new UserRepository();
        $user = $userRepository->getByEmail($passwordReset->email);

        if (!$user)
            return response()->json([
                'message' => 'We can\'t find a user with that e-mail address.'
            ], $this->notFoundStatus);

        $user = $userRepository->setNewPassword($request->get('password'), $user->id);

        $passwordReset->delete();

        return response()->json($user);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $userRepository = new UserRepository();

        $user = $userRepository->getByEmail(Auth::user()->email);

        if ($user->password == bcrypt($request->get('current'))) {
            $user = $userRepository->setNewPassword($request->get('new'), Auth::user()->id);
        }

        return response()->json($user);
    }

    public function signOut()
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }

        return response()->json(["success" => true]);
    }
}
