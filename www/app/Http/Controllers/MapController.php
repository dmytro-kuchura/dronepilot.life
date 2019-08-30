<?php

namespace App\Http\Controllers;

use App\Repositories\MapRepository;

class MapController extends Controller
{
    protected $repository;

    public function __construct(MapRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('map.index');
    }

    public function inner($country)
    {
        $result = $this->repository->get($country);

        return view('map.inner', [
            'result' => $result
        ]);
    }
}
