<?php

namespace App\Http\Controllers;

class WorkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function inner()
    {
        return view('inner');
    }
}
