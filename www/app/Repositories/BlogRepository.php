<?php

namespace App\Repositories;

use App\Helpers\Text;
use App\Helpers\Upload;
use App\Models\Records;

class BlogRepository
{
    public function all()
    {
        $records = Records::where('status', 1)->get();

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
        $records = Records::orderBy('created_at', 'desc')->get();

        return $records;
    }

    public function getByAlias($alias)
    {
        return Records::where('status', 1)->where('alias', $alias)->first();
    }

    public function getByID($ID)
    {
        return Records::where('id', $ID)->first();
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
        $model->image = Upload::save($request);
        $model->alias = $request['alias'] ? $request['alias'] : Text::cyrillic($request['name']);
        $model->status = $request['status'] === 'on' ? 1 : 0;

        return $model->save();
    }

    public function store($request)
    {
        /* @var $model Records */
        $model = new Records();

        $model->title = $request['title'];
        $model->name = $request['name'];
        $model->description = $request['description'];
        $model->keywords = $request['keywords'];
        $model->content = $request['content'];
        $model->image = Upload::save($request);
        $model->alias = $model->alias = $request['alias'] ? $request['alias'] : Text::cyrillic($request['name']);
        $model->status = $request['status'] === 'on' ? 1 : 0;

        return $model->save();
    }

    public function destroy($ID)
    {
        return Records::destroy($ID);
    }
}
