<?php

namespace App\Repositories;

use App\Models\Contacts;
use Illuminate\Support\Carbon;

class ContactsRepository
{
    protected $model = Contacts::class;

    public function list()
    {
        $result = $this->model::orderBy('id', 'desc')->get();

        return $result;
    }

    public function getByID($ID)
    {
        $result = $this->model::where('id', $ID)->first();

        return $result;
    }

    public function create($request)
    {
        if (self::checkByIP(geoip()->getLocation()->ip)) {
            $model = new $this->model();

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
        $result = $this->model::find($ID);

        $result->status = $result->status === Contacts::STATUS_READ_CONTACTS ? Contacts::STATUS_NOT_READ_CONTACTS : Contacts::STATUS_READ_CONTACTS;

        return $result->save();
    }

    public function checkByIP($ip)
    {
        $result = $this->model::where('ip', $ip)->orderby('id', 'desc')->first();

        return is_null($result) || Carbon::now()->diffInMinutes(Carbon::parse($result->created_at)) > 15;
    }

    public function destroy($id)
    {
        return $this->model::destroy($id);
    }
}
