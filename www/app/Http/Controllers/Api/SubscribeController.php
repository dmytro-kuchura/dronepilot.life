<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SubscribeRequest;
use App\Http\Requests\ImageUploadRequest;
use App\Repositories\SubscribersRepository;
use App\Services\EmailService;
use App\Services\UploadService;

class SubscribeController extends Controller
{
    protected $service;

    public function __construct(EmailService $service)
    {
        $this->service = $service;
    }

    public function subscribe(SubscribeRequest $request)
    {
        $repository = new SubscribersRepository();

        if ($repository->create($request->all())) {
            $this->service->send("email.subscribe", [
                "email" => $request->get("email"),
                "subject" => "Спасибо за подписку!",
            ], $request->get("email"), "Спасибо за подписку!");

            Log::info("Subscribe form save successful!", ["email" => $request->get("email")]);

            return $this->returnResponse([
                "success" => true,
            ]);
        } else {
            Log::error("Subscribe form was not save!", ["email" => $request->get("email")]);

            return $this->returnResponse([
                "success" => false,
            ], 400);
        }
    }
}
