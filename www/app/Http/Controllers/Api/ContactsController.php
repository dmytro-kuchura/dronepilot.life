<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ContactsRequest;
use App\Repositories\ContactsRepository;
use App\Services\EmailService;

class ContactsController extends Controller
{
    protected $service;

    public function __construct(EmailService $service)
    {
        $this->service = $service;
    }

    public function contacts(ContactsRequest $request)
    {
        $repository = new ContactsRepository();

        try {
            $repository->create($request->all());

            Log::info("Contacts form save successful!", ["email" => $request->get("email"), "name" => $request->get("name")]);
        } catch (Exception $exception) {
            Log::error("Save comment failed!", ["message" => $exception->getMessage(), "file" => $exception->getFile(), "line" => $exception->getLine()]);

            return $this->returnResponse([
                "success" => false,
            ], 400);
        }

        return $this->returnResponse([
            "success" => true,
        ]);
    }
}
