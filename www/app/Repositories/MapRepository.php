<?php

namespace App\Repositories;

use App\Helpers\Upload;
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
        return $this->model::updateOrCreate(
            ['id' => $request['id']],
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
                'image' => isset($request['file']) ? Upload::save($request, config('images.maps')) : null,
            ]
        );
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
                'image' => isset($request['file']) ? Upload::save($request, config('images.maps')) : null,
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

    public function random($limit)
    {
        return $this->model::where('status', Map::STATUS_AVAILABLE)->limit($limit)->inRandomOrder()->get();
    }

    /**
     * Count view record
     *
     * @param $id
     * @return mixed
     */
    public function addView($id)
    {
        $this->model::where('id', $id)->increment('views', 1);
    }

    public function all()
    {
        return $this->model::where('status', Map::STATUS_AVAILABLE)->orderBy('id', 'desc')->get();
    }
}
