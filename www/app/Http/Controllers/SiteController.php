<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;

class SiteController extends Controller
{
    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->all();

        return view('index', [
            'left' => isset($result['left']) ? $result['left'] : [],
            'right' => isset($result['right']) ? $result['right'] : [],
        ]);
    }

    public function contacts()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
