<?php

namespace App\Http\Controllers;

use App\Repositories\TagsRepository;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\CommentsRepository;
use App\Repositories\CategoriesRepository;

class BlogController extends Controller
{
    const RECORDS_AT_PAGE = 6;

    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->paginate(self::RECORDS_AT_PAGE);

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
        $categoryRepository = new CategoriesRepository();

        $result = $this->repository->getByCategory($category);
        $category = $categoryRepository->getCategoryByAlias($category);

        return view('blog.categories', [
            'result' => $result,
            'category' => $category,
        ]);
    }

    public function tag($tag)
    {
        $tagRepository = new TagsRepository();

        $result = $this->repository->getByTag($tag);
        $tag = $tagRepository->getTagByAlias($tag);

        return view('blog.tags', [
            'result' => $result,
            'tag' => $tag
        ]);
    }
}
