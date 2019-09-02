<?php

namespace App\Repositories;

use App\Models\Visitors;

class VisitorsRepository implements Repository
{
    protected $model = Visitors::class;

    public function all()
    {
        return $this->model::orderBy('id', 'desc')->get();
    }

    public function list()
    {
        //
    }

    public function update($request)
    {
        //
    }

    public function store($request)
    {
        return $this->model::create([
            'ip' => geoip()->getLocation()->ip,
            'country' => geoip()->getLocation()->country,
            'url' => $request['url'],
            'city' => geoip()->getLocation()->city,
            'referer' => $request['referer'],
            'user_agent' => !is_null($request['agent']) ? $request['agent'] : null,
        ]);
    }

    public function destroy($id)
    {
        return $this->model::destroy($id);
    }


    public function get($id)
    {
        //
    }
}
