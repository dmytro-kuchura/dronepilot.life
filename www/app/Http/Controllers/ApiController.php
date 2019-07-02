<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CommentsRequest;
use App\Http\Requests\ContactsRequest;
use App\Http\Requests\SubscribeRequest;
use App\Http\Requests\ImageUploadRequest;
use App\Repositories\CommentsRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\SubscribersRepository;
use App\Services\EmailService;
use App\Services\UploadService;

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

        try {
            $repository->create($request->all());

            Log::channel('database')->info('Save comment!', $request->all());
        } catch (Exception $exception) {
            Log::channel('database')->warning('Save comment failed!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }

        return $this->returnResponse([
            'success' => true
        ]);
    }

    public function contacts(ContactsRequest $request)
    {
        $repository = new ContactsRepository();

        try {
            $repository->create($request->all());

            Log::channel('database')->info('Contacts form save successful!', ['email' => $request->get('email'), 'name' => $request->get('name')]);
        } catch (Exception $exception) {
            Log::channel('database')->warning('Save comment failed!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }

        return $this->returnResponse([
            'success' => true
        ]);
    }

    public function subscribe(SubscribeRequest $request)
    {
        $repository = new SubscribersRepository();

        if ($repository->create($request->all())) {
            $this->service->send('email.subscribe', [
                'email' => $request->get('email'),
                'subject' => 'Спасибо за подписку!'
            ], $request->get('email'), 'Спасибо за подписку!');

            Log::channel('database')->info('Email subscribe successful!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => true
            ]);
        } else {
            Log::channel('database')->warning('Email subscribe failed!', ['email' => $request->get('email')]);

            return $this->returnResponse([
                'success' => false
            ], 400);
        }
    }

    public function upload(ImageUploadRequest $request)
    {
        try {
            $service = new UploadService();

            $path = $service->upload($request);

            Log::channel('database')->info('File upload successful!', ['file' => $path]);
        } catch (Exception $exception) {
            Log::channel('database')->error('File upload failed!', [
                'exception' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);

            return $this->returnResponse([
                'success' => false,
            ], 400);
        }

        return $this->returnResponse([
            'success' => true,
            'default' => $path
        ]);
    }
}
