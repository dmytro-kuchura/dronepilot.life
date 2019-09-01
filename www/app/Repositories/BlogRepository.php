<?php

namespace App\Repositories;

use App\Helpers\Text;
use App\Helpers\Upload;
use App\Models\Records;
use Illuminate\Support\Facades\DB;

class BlogRepository implements Repository
{
    protected $model = Records::class;

    /**
     * All published records for Main Page
     *
     * @return array
     */
    public function all()
    {
        return $this->model::select(
            'records.*',
            DB::raw('count(comments.id) AS comments')
        )
            ->leftJoin('comments', 'records.id', '=', 'comments.record_id')
            ->groupBy('records.id')
            ->where('records.status', 1)
            ->where('comments.status', 1)
            ->orderBy('records.id', 'desc')
            ->get();
    }

    /**
     * All records for Dashboard
     *
     * @return mixed
     */
    public function list()
    {
        $records = $this->model::orderBy('created_at', 'desc')->get();

        return $records;
    }

    /**
     * Update DB record
     *
     * @param $request
     * @return bool
     */
    public function update($request)
    {
        if (isset($request['file'])) {
            $this->model::updateOrCreate(
                ['id' => $request['id']],
                [
                    'image' => Upload::save($request),
                ]
            );
        }

        return $this->model::updateOrCreate(
            ['id' => $request['id']],
            [
                'title' => $request['title'],
                'name' => $request['name'],
                'description' => $request['description'],
                'keywords' => $request['keywords'],
                'content' => $request['content'],
                'alias' => $request['alias'] ? $request['alias'] : Text::cyrillic(strtolower($request['name'])),
                'status' => $request['status'] === 'on' ? 1 : 0,
                'category_id' => $request['category_id'],
            ]
        );
    }

    /**
     * Create DB record
     *
     * @param $request
     * @return bool
     */
    public function store($request)
    {
        /* @var $model Records */
        $model = new $this->model;

        $model->title = $request['title'];
        $model->name = $request['name'];
        $model->description = $request['description'];
        $model->keywords = $request['keywords'];
        $model->content = $request['content'];
        if (isset($request['file'])) {
            $model->image = Upload::save($request);
        }
        $model->alias = $model->alias = $request['alias'] ? $request['alias'] : Text::cyrillic(strtolower($request['name']));
        $model->status = $request['status'] === 'on' ? 1 : 0;
        $model->category_id = $request['category_id'];

        return $model->save();
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

    /**
     * Get record by alias param
     *
     * @param $alias
     * @return mixed
     */
    public function getByAlias($alias)
    {
        return $this->model::where('status', 1)->where('alias', $alias)->first();
    }

    public function getRecent()
    {
        return $this->model::where('status', 1)->limit(4)->inRandomOrder()->get();
    }

    public function getByCategory($category)
    {
        return $this->model::select(
            'records.*',
            DB::raw('count(comments.id) AS comments')
        )
            ->leftJoin('categories', 'records.category_id', '=', 'categories.id')
            ->leftJoin('comments', 'records.id', '=', 'comments.record_id')
            ->groupBy('records.id')
            ->where('records.status', 1)
            ->where('comments.status', 1)
            ->where('categories.alias', $category)
            ->get();
    }

    public function getByTag($tag)
    {
        return $this->model::select(
            'records.*',
            DB::raw('count(comments.id) AS comments')
        )
            ->leftJoin('tags_selected', 'tags_selected.record_id', '=', 'records.id')
            ->leftJoin('tags', 'tags_selected.tag_id', '=', 'tags.id')
            ->leftJoin('comments', 'records.id', '=', 'comments.record_id')
            ->groupBy('records.id')
            ->where('records.status', 1)
            ->where('comments.status', 1)
            ->where('tags.alias', $tag)
            ->get();
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

    public function countCategories()
    {
        return $this->model::select(
            'categories.name',
            'categories.alias',
            DB::raw('count(*) AS count')
        )
            ->leftJoin('categories', 'categories.id', '=', 'records.category_id')
            ->groupBy('categories.id')
            ->orderBy('categories.id', 'desc')
            ->get();
    }
}
