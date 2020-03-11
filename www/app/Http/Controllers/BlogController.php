<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\TagsRepository;
use App\Repositories\CommentsRepository;
use App\Repositories\CategoriesRepository;

class BlogController extends Controller
{
    const RECORDS_AT_PAGE = 6;

    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $result = $this->blogRepository->paginate(self::RECORDS_AT_PAGE);

        return view('blog.index', [
            'result' => $result
        ]);
    }

    public function inner(Request $request)
    {
        $result = $this->blogRepository->getByAlias($request->route('alias'));

        if (!$result) {
            abort(404, 'Page not found');
        }

        $repository = new CommentsRepository();

        $comments = $repository->getCommentsByRecordId($result->id);
        $count_comments = $repository->getCommentsCountByRecordId($result->id);

        $this->blogRepository->addView($result->id);

        return view('blog.inner', [
            'result' => $result,
            'comments' => $comments,
            'count_comments' => $count_comments,
        ]);
    }

    /**
     * CATEGORY page
     *
     * @param $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category($category)
    {
        $categoryRepository = new CategoriesRepository();

        $result = $this->blogRepository->getByCategory($category);
        $category = $categoryRepository->getCategoryByAlias($category);

        return view('blog.categories', [
            'result' => $result,
            'category' => $category,
        ]);
    }

    /**
     * TAG page
     *
     * @param $tag
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tag($tag)
    {
        $tagRepository = new TagsRepository();

        $result = $this->blogRepository->getByTag($tag);
        $tag = $tagRepository->getTagByAlias($tag);

        return view('blog.tags', [
            'result' => $result,
            'tag' => $tag
        ]);
    }
}
