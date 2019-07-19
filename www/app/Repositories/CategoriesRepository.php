<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoriesRepository implements Repository
{
    protected $model = Categories::class;

    public function all()
    {
        return $this->model::where('status', 1)->orderBy('id', 'desc')->get();
    }

    public function list()
    {
        $records = $this->model::orderBy('created_at', 'desc')->get();

        return $records;
    }

    public function update($request)
    {
        //
    }

    public function store($request)
    {
        //
    }

    public function destroy($id)
    {
        return $this->model::destroy($id);
    }

    public function get($id)
    {
        return $this->model::where('id', $id)->first();
    }
}
