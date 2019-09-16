<?php

namespace App\Repositories;

use App\Models\Tags;

class TagsRepository implements Repository
{
    protected $model = Tags::class;

    public function all()
    {
        return $this->model::where('status', 1)->orderBy('id', 'desc')->get();
    }

    public function list()
    {
        $records = $this->model::orderBy('created_at', 'desc')->get();

        return $records;
    }

    public function update($id)
    {
        //
    }

    public function store($request)
    {
        $this->model::create([
            'name' => $request['name'],
            'alias' => $request['alias'],
            'title' => $request['title'],
            'keywords' => $request['keywords'],
            'description' => $request['description'],
            'status' => (string)$request['status'] === 'on' ? 1 : 0,
        ]);
    }

    public function destroy($id)
    {
        return $this->model::destroy($id);
    }

    public function get($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function getTagByAlias($alias)
    {
        return $this->model::where('alias', $alias)->first();
    }
}
