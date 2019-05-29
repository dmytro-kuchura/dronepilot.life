<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Http\Requests\SubscribeRequest;
use App\Repositories\SubscribersRepository;

class ApiController extends Controller
{
    public function comment()
    {
        //
    }

    public function contacts(ContactsRequest $request)
    {
        //
    }

    public function subscribe(SubscribeRequest $request)
    {
        $repository = new SubscribersRepository();

        $repository->create($request->all());
    }
}
