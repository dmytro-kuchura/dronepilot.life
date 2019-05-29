<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use App\Http\Requests\ContactsRequest;
use App\Http\Requests\SubscribeRequest;
use App\Repositories\CommentsRepository;
use App\Repositories\ContactsRepository;
use App\Repositories\SubscribersRepository;

class ApiController extends Controller
{
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

    public function contacts(ContactsRequest $request)
    {
        $repository = new ContactsRepository();

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

    public function subscribe(SubscribeRequest $request)
    {
        $repository = new SubscribersRepository();

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
}
