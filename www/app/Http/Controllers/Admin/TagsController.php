<?php


namespace App\Http\Controllers\Admin;


use App\Http\Requests\Categories\StoreCategory;
use App\Repositories\TagsRepository;

class TagsController
{
    protected $repository;

    public function __construct(TagsRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.tags.list', [
            'result' => $result
        ]);
    }

    public function create()
    {
        return view('dashboard.tags.create');
    }

    public function store(StoreCategory $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('tags.list');
    }

    public function edit($id)
    {
        $result = $this->repository->get($id);

        return view('dashboard.tags.update', [
            'result' => $result
        ]);
    }

    public function update(StoreCategory $request)
    {
        $this->repository->update($request->all());

        return redirect()->route('tags.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('tags.list');
    }
}
