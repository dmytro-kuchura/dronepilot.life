<?php

namespace App\Repositories;

use App\Helpers\Text;
use App\Models\Records;
use Illuminate\Http\Request;

class BlogRepository
{
    public function all()
    {
        $records = Records::where('status', 1)->get();

        $result = [];

        foreach ($records as $key => $obj) {
            if ($key & 1) {
                $result['left'] = $obj;
            } else {
                $result['right'] = $obj;
            }
        }

        return $result;
    }

    public function getByAlias($alias)
    {
        return Records::where('status', 1)->where('alias', $alias)->first();
    }

    public function getByID($ID)
    {
        return Records::where('id', $ID)->first();
    }

    public function list()
    {
        $records = Records::orderBy('created_at', 'desc')->get();

        return $records;
    }

    public function update($request)
    {
        /* @var $model Records */
        $model = Records::where('id', $request['id'])->first();

        $model->title = $request['title'];
        $model->name = $request['name'];
        $model->description = $request['description'];
        $model->keywords = $request['keywords'];
        $model->content = $request['content'];
        $model->alias = Text::cyrillic($request['name']);

        dd($model);
    }
}
