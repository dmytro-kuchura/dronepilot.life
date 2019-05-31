<?php

namespace App\Repositories;

use App\Helpers\Text;
use App\Helpers\Upload;
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

    public function update($request)
    {
        /* @var $model Projects */
        $model = $this->model::where('id', $request['id'])->first();

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
        /* @var $model Projects */
        $model = $this->model;

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

    /**
     * Destroy record from database
     *
     * @param $ID
     * @return int
     */
    public function destroy($ID)
    {
        return $this->model::destroy($ID);
    }
}
