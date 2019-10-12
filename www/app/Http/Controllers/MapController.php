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
        $result = $this->repository->find($country);

        if (!$result) {
            abort(404);
        }

        $this->repository->addView($result->id);

        return view('map.inner', [
            'result' => $result,
        ]);
    }
}
