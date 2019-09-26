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
                'maps.*'
            )
                ->groupBy('maps.id')
                ->where('maps.status', Map::STATUS_AVAILABLE)
                ->orderBy('maps.id', 'desc')
                ->get();
        }
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
        return $this->model::where('alias', $country)->first();
    }

    public function all()
    {
        // TODO: Implement all() method.
    }
}
