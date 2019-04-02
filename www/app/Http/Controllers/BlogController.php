<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;

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
            'left' => $result['left'],
            'right' => $result['right']
        ]);
    }

    public function inner(Request $request)
    {
        $result = $this->repository->getByAlias($request->route('alias'));

        return view('blog.inner', [
            'result' => $result
        ]);
    }
}
