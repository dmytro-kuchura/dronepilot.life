<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Map\StoreMap;
use App\Http\Requests\Map\UpdateMap;
use App\Repositories\MapRepository;

class MapController extends Controller
{
    protected $repository;

    public function __construct(MapRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.map.list', [
            'result' => $result,
        ]);
    }

    public function create()
    {
        return view('dashboard.map.create');
    }

    public function store(StoreMap $request)
    {
        $this->repository->store($request->all());

        return redirect()->route('map.list');
    }

    public function edit($id)
    {
        $result = $this->repository->get($id);

        return view('dashboard.map.update', [
            'result' => $result,
        ]);
    }

    public function update(UpdateMap $request)
    {
        $this->repository->update($request->all());

        return redirect()->route('map.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('map.list');
    }
}
