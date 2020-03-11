<?php

namespace App\Http\Controllers;

use App\Repositories\MapRepository;

class MapController extends Controller
{
    protected $mapRepository;

    public function __construct(MapRepository $mapRepository)
    {
        $this->mapRepository = $mapRepository;
    }

    /**
     * Main page MAP Rules
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('map.index');
    }

    /**
     * Inner MAP Rules page
     *
     * @param $country
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function inner($country)
    {
        $result = $this->mapRepository->find($country);

        if (!$result) {
            return view('map.in-progress');
        }

        $this->mapRepository->addView($result->id);

        return view('map.inner', [
            'result' => $result,
        ]);
    }
}
