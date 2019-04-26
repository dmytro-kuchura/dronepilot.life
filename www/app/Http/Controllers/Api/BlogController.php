<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function list()
    {
        $result = $this->repository->list();

        return view('blog.index', [
            'result' => $result,
        ]);
    }
}
