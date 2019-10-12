<?php

namespace App\Repositories;

use App\Helpers\Tags;
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
            DB::raw("(SELECT COUNT(comments.id) FROM comments WHERE comments.record_id = records.id AND comments.status = 'approved') AS comments")
        )
            ->groupBy('records.id')
            ->where('records.status', Records::STATUS_AVAILABLE)
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
                    'image' => Upload::save($request, config('images.blog')),
                ]
            );
        }

        if (isset($request['tags'])) {
            Tags::update($request['id'], $request['tags']);
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
                'status' => $request['status'] === 'on' ? Records::STATUS_AVAILABLE : Records::STATUS_DISABLE,
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
            $model->image = Upload::save($request, config('images.blog'));
        }
        $model->alias = $model->alias = $request['alias'] ? $request['alias'] : Text::cyrillic(strtolower($request['name']));
        $model->status = $request['status'] === 'on' ? Records::STATUS_AVAILABLE : Records::STATUS_DISABLE;
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
        return $this->model::where('status', Records::STATUS_AVAILABLE)->where('alias', $alias)->first();
    }

    public function getRecent()
    {
        return $this->model::where('status', Records::STATUS_AVAILABLE)->limit(4)->inRandomOrder()->get();
    }

    public function getByCategory($category)
    {
        return $this->model::select(
            'records.*',
            DB::raw("(SELECT COUNT(comments.id) FROM comments WHERE comments.record_id = records.id AND comments.status = 'approved') AS comments")
        )
            ->leftJoin('categories', 'records.category_id', '=', 'categories.id')
            ->groupBy('records.id')
            ->where('records.status', Records::STATUS_AVAILABLE)
            ->where('categories.alias', $category)
            ->get();
    }

    public function getByTag($tag)
    {
        return $this->model::select(
            'records.*',
            DB::raw("(SELECT COUNT(comments.id) FROM comments WHERE comments.record_id = records.id AND comments.status = 'approved') AS comments")
        )
            ->leftJoin('tags_selected', 'tags_selected.record_id', '=', 'records.id')
            ->leftJoin('tags', 'tags_selected.tag_id', '=', 'tags.id')
            ->groupBy('records.id')
            ->where('records.status', Records::STATUS_AVAILABLE)
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

    public function search($query)
    {
        return $this->model::select(
            'records.*',
            DB::raw('count(comments.id) AS comments')
        )
            ->leftJoin('comments', 'records.id', '=', 'comments.record_id')
            ->groupBy('records.id')
            ->where('records.status', Records::STATUS_AVAILABLE)
            ->where('records.name', 'LIKE', '%' . strtolower($query) . '%')
            ->orWhere('records.name', 'LIKE', '%' . strtoupper($query) . '%')
            ->orWhere('records.content', 'LIKE', '%' . strtolower($query) . '%')
            ->orWhere('records.content', 'LIKE', '%' . strtoupper($query) . '%')
            ->get();
    }
}
