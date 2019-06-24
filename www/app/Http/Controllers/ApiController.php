<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\CommentsRequest;
use App\Http\Requests\ContactsRequest;
use App\Http\Requests\SubscribeRequest;
use App\Repositories\CommentsRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\SubscribersRepository;
use App\Services\EmailService;

class ApiController extends Controller
{
    protected $service;

    public function __construct(EmailService $service)
    {
        $this->service = $service;
    }

    public function comment(CommentsRequest $request)
    {
        $repository = new CommentsRepository();

        if ($repository->create($request->all())) {
            return $this->returnResponse([
                'success' => true
            ]);
        } else {
            return $this->returnResponse([
                'success' => false
            ], 400);
        }
    }

    /**
     * Contacts form
     *
     * @param ContactsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contacts(ContactsRequest $request)
    {
        $repository = new ContactsRepository();

        if ($repository->create($request->all())) {
//            Log::info('Contacts form save successful!', ['email' => $request->get('email'), 'name' => $request->get('name')]);

            return $this->returnResponse([
                'success' => true
            ]);
        } else {
//            Log::warning('Contacts form save failed!', ['email' => $request->get('email'), 'name' => $request->get('name')]);

            return $this->returnResponse([
                'success' => false
            ], 400);
        }
    }

    /**
     * Subscribe form
     *
     * @param SubscribeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function subscribe(SubscribeRequest $request)
    {
        $repository = new SubscribersRepository();

        if ($repository->create($request->all())) {
            $this->service->send('email.subscribe', [
                'email' => $request->get('email'),
                'subject' => 'Спасибо за подписку!'
            ], $request->get('email'), 'Спасибо за подписку!');

            Log::info('Email subscribe successful!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => true
            ]);
        } else {
            Log::warning('Email subscribe failed!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => false
            ], 400);
        }
    }
}
