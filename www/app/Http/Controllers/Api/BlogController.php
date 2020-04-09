<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    const RECORDS_AT_PAGE = 5;

    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function list()
    {
        $result = $this->blogRepository->list(self::RECORDS_AT_PAGE);

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

    public function update(UpdateBlogRequest $updateBlogRequest)
    {
        $this->blogRepository->update($updateBlogRequest->all());

        return $this->returnResponse([
            'update' => true
        ]);
    }
}
