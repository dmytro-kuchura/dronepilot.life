<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoriesRepository implements Repository
{
    protected $model = Categories::class;

    public function all()
    {
        return $this->model::where('status', Categories::STATUS_AVAILABLE)->orderBy('id', 'desc')->get();
    }

    public function shortList()
    {
        return $this->model::select('id', 'name')->orderBy('created_at', 'desc')->get();
    }

    public function list()
    {
        return $this->model::orderBy('created_at', 'desc')->get();
    }

    public function update($request)
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
            'status' => (string)$request['status'] === 'on' ? Categories::STATUS_AVAILABLE : Categories::STATUS_DISABLE,
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

    public function getCategoryByAlias($alias)
    {
        return $this->model::where('alias', $alias)->first();
    }
}
