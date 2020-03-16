<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    const RECORDS_AT_PAGE = 4;

    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function list()
    {
        $result = $this->blogRepository->paginate(self::RECORDS_AT_PAGE);

        return $this->returnResponse([
            'result' => $result
        ]);
    }

    public function inner(int $id)
    {
        $result = $this->blogRepository->get($id);

        return $this->returnResponse([
            'result' => $result
        ]);
    }

    public function tag(string $tag)
    {
        $result = $this->blogRepository->getByTag($tag);

        return $this->returnResponse([
            'result' => $result
        ]);
    }

    public function category(string $category)
    {
        $result = $this->blogRepository->getByCategory($category);

        return $this->returnResponse([
            'result' => $result
        ]);
    }
}
