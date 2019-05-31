<?php

namespace App\Repositories;

use App\Models\Projects;

class WorkRepository
{
    protected $model = Projects::class;

    public function all()
    {
        $records = $this->model::where('status', 1)->orderBy('id', 'desc')->get();

        $result = [];

        foreach ($records as $key => $obj) {
            if ($key & 1) {
                $result['left'][] = $obj;
            } else {
                $result['right'][] = $obj;
            }
        }

        return $result;
    }

    public function list()
    {
        return $this->model::orderBy('id', 'desc')->get();
    }

    public function getByAlias($alias)
    {
        return $this->model::where('status', 1)->where('alias', $alias)->first();
    }

    public function getByID($ID)
    {
        return $this->model::where('id', $ID)->first();
    }
}
