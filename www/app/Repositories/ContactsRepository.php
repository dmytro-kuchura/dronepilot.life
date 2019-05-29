<?php

namespace App\Repositories;

use App\Models\Contacts;
use Illuminate\Support\Carbon;

class ContactsRepository
{
    public function all()
    {
        $model = Contacts::order();

        return $model;
    }

    public function create($request)
    {
        if (self::checkByIP(geoip()->getLocation()->ip)) {
            $model = new Contacts();

            $model->name = $request['name'];
            $model->email = $request['email'];
            $model->description = $request['description'];
            $model->status = Contacts::STATUS_NOT_READ_CONTACTS;
            $model->ip = geoip()->getLocation()->ip;

            return $model->save();
        } else {
            return false;
        }
    }

    public function changeStatus($ID)
    {
        /* @var $model Contacts */
        $model = Contacts::find($ID);

        $model->status = $model->status === Contacts::STATUS_READ_CONTACTS ? Contacts::STATUS_NOT_READ_CONTACTS : Contacts::STATUS_READ_CONTACTS;

        return $model->save();
    }

    public function checkByIP($ip)
    {
        $model = Contacts::where('ip', $ip)->orderby('id', 'desc')->first();

        return is_null($model) || Carbon::now()->diffInMinutes(Carbon::parse($model->created_at)) > 15;
    }
}
