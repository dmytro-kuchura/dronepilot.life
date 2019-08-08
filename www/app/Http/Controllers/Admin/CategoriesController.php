<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\StoreCategory;
use App\Repositories\CategoriesRepository;

class CategoriesController extends Controller
{
    protected $repository;

    public function __construct(CategoriesRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.categories.list', [
            'result' => $result
        ]);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(StoreCategory $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('categories.list');
    }

    public function edit($id)
    {
        $result = $this->repository->get($id);

        return view('dashboard.categories.update', [
            'result' => $result
        ]);
    }

    public function update(StoreCategory $request)
    {
        $this->repository->update($request->all());

        return redirect()->route('categories.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('categories.list');
    }
}
