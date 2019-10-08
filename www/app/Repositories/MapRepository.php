<?php

namespace App\Repositories;

use App\Models\Map;

class MapRepository implements Repository
{
    protected $model = Map::class;

    public function list()
    {
        {
            return $this->model::select(
                'map.*'
            )
                ->groupBy('map.id')
                ->orderBy('map.id', 'desc')
                ->get();
        }
    }

    public function update($request)
    {
        // TODO: Implement update() method.
    }

    public function store($request)
    {
        return $this->model::updateOrCreate(
            [
                'title' => $request['title'],
                'alias' => $request['alias'],
                'name' => $request['name'],
                'description' => $request['description'],
                'keywords' => $request['keywords'],
                'content' => $request['content'],
                'rules' => $request['rules'],
                'other' => $request['other'],
                'status' => $request['status'] === 'on' ? Map::STATUS_AVAILABLE : Map::STATUS_DISABLE,
            ]
        );
    }

    /**
     * Destroy record from database
     *
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->model::destroy($id);
    }

    /**
     * Get only one record
     *
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function find($country)
    {
        return $this->model::where('alias', $country)->first();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }
}
