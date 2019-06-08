<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPost;
use App\Repositories\BlogRepository;

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

        Alert::success('All is OK');

        return view('dashboard.blog.list', [
            'result' => $result
        ]);
    }

    public function create()
    {
        return view('dashboard.blog.create');
    }

    public function store(StoreBlogPost $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('blog.list');
    }

    public function edit($id)
    {
        $result = $this->repository->get($id);

        return view('dashboard.blog.update', [
            'result' => $result
        ]);
    }

    public function update(StoreBlogPost $request)
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
