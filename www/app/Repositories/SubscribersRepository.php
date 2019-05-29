<?php

namespace App\Repositories;

use App\Models\Subscribers;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class SubscribersRepository
{
    public function all()
    {
        $model = Subscribers::all();

        return $model;
    }

    public function create($request)
    {
        $model = new Subscribers();

        $model->email = $request['email'];
        $model->status = Subscribers::STATUS_ACTIVE_SUBSCRIBER;
        $model->hash = Str::random(40);

        return $model->save();
    }

    public function unsubscribe($hash)
    {
        /* @var $model Subscribers */
        $model = Subscribers::where('hash', $hash)->first();

        $model->status = Subscribers::STATUS_DISABLE_SUBSCRIBER;
        $model->unsubscribe_at = Carbon::now()->format('Y-m-d H:i:s');

        return $model->save();
    }

    public function changeStatus($ID)
    {
        /* @var $model Subscribers */
        $model = Subscribers::find($ID);

        $model->status = $model->status === Subscribers::STATUS_ACTIVE_SUBSCRIBER ? Subscribers::STATUS_DISABLE_SUBSCRIBER : Subscribers::STATUS_ACTIVE_SUBSCRIBER;

        return $model->save();
    }
}
