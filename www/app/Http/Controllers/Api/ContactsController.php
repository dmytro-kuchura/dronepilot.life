<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Services\EmailService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Repositories\ContactsRepository;
use Illuminate\Support\Facades\Log;

class ContactsController extends Controller
{
    protected $service;

    protected $contactsRepository;

    public function __construct(
        ContactsRepository $contactsRepository,
        EmailService $service
    )
    {
        $this->service = $service;
        $this->contactsRepository = $contactsRepository;
    }

    public function contacts(ContactsRequest $request)
    {
        try {
            $this->contactsRepository->create($request->all());

            Log::info('Contacts form save successful!', [
                'email' => $request->get('email'),
                'name' => $request->get('name')
            ]);
        } catch (Exception $exception) {
            Log::error('Save comment failed!', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }

        return $this->returnResponse([
            'success' => true,
        ], 201);
    }
}
