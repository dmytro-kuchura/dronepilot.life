<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SubscribeRequest;
use App\Repositories\SubscribersRepository;
use App\Services\EmailService;

class SubscribeController extends Controller
{
    protected $service;

    protected $subscribersRepository;

    public function __construct(
        SubscribersRepository $subscribersRepository,
        EmailService $service
    )
    {
        $this->service = $service;
        $this->subscribersRepository = $subscribersRepository;
    }

    public function subscribe(SubscribeRequest $request)
    {
        if ($this->subscribersRepository->create($request->all())) {
            $this->service->send('email.subscribe', [
                'email' => $request->get('email'),
                'subject' => 'Спасибо за подписку!',
            ], $request->get('email'), 'Спасибо за подписку!');

            Log::info('Subscribe form save successful!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => true,
            ], 201);
        } else {
            Log::error('Subscribe form was not save!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }
    }
}
