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
            'result' => $result
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

    public function category($category)
    {
        $result = $this->repository->getByCategory($category);

        return view('blog.category', [
            'result' => $result
        ]);
    }

    public function tag($tag)
    {
        $result = $this->repository->getByTag($tag);

        return view('blog.index', [
            'result' => $result
        ]);
    }
}
