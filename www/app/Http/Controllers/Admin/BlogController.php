<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlog;
use App\Http\Requests\Blog\UpdateBlog;
use App\Repositories\BlogRepository;
use App\Repositories\TagsRepository;
use App\Repositories\CategoriesRepository;

class BlogController extends Controller
{
    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.blog.list', [
            'result' => $result,
        ]);
    }

    public function create(CategoriesRepository $categoriesRepository, TagsRepository $tagsRepository)
    {
        $categories = $categoriesRepository->all();
        $tags = $tagsRepository->all();

        return view('dashboard.blog.create', [
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function store(StoreBlog $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('blog.list');
    }

    public function edit($id, CategoriesRepository $categoriesRepository, TagsRepository $tagsRepository)
    {
        $result = $this->repository->get($id);

        $categories = $categoriesRepository->all();
        $tags = $tagsRepository->all();

        return view('dashboard.blog.update', [
            'result' => $result,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function update(UpdateBlog $request)
    {
        $this->repository->update($request->all());

        return redirect()->route('blog.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('blog.list');
    }
}
