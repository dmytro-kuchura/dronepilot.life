<?php

namespace App\Repositories;

use App\Models\Map;

class MapRepository implements Repository
{
    protected $model = Map::class;

    public function list()
    {
        // TODO: Implement list() method.
    }

    public function update($request)
    {
        // TODO: Implement update() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
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
     * @param $country
     * @return mixed
     */
    public function get($country)
    {
        return $this->model::where('country', $country)->first();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }
}
