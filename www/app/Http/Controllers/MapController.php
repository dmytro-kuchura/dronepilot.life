<?php

namespace App\Http\Controllers;

class MapController extends Controller
{
    public function index()
    {
        return view('map.index');
    }

    public function inner($country)
    {
        return view('map.inner');
    }
}
