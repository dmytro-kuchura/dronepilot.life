<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\CommentsRepository;

class BlogController extends Controller
{
    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->all();

        return view('blog.index', [
            'left' => isset($result['left']) ? $result['left'] : [],
            'right' => isset($result['right']) ? $result['right'] : [],
        ]);
    }

    public function inner(Request $request)
    {
        $result = $this->repository->getByAlias($request->route('alias'));

        if (!$result) {
            abort(404, 'Page not found');
        }

        $repository = new CommentsRepository();

        $comments = $repository->getCommentsByRecordId($result->id);
        $count_comments = $repository->getCommentsCountByRecordId($result->id);

        $this->repository->addView($result->id);

        return view('blog.inner', [
            'result' => $result,
            'comments' => $comments,
            'count_comments' => $count_comments,
        ]);
    }

    public function list()
    {
        $result = $this->repository->all();

        return response()->json(['result' => $result], 200, [], JSON_NUMERIC_CHECK);
    }

    public function category($category)
    {
        $result = $this->repository->list();

        return response()->json(['result' => $result], 200, [], JSON_NUMERIC_CHECK);
    }

    public function tag($tag)
    {
        $result = $this->repository->list();

        return response()->json(['result' => $result], 200, [], JSON_NUMERIC_CHECK);
    }
}
