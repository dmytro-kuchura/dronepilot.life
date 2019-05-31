<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkPost;
use App\Repositories\WorkRepository;

class WorksController extends Controller
{
    protected $repository;

    public function __construct(WorkRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.works.list', [
            'result' => $result
        ]);
    }

    public function create()
    {
        return view('dashboard.works.create');
    }

    public function store(StoreWorkPost $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('works.list');
    }

    public function edit($id)
    {
        $result = $this->repository->getByID($id);

        return view('dashboard.works.update', [
            'result' => $result
        ]);
    }

    public function update(StoreWorkPost $request)
    {
        $this->repository->update($request->all());

        return redirect()->route('works.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('works.list');
    }
}
