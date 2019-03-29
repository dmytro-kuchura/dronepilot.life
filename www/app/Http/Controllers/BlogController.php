<?php

namespace App\Http\Controllers;

class BlogController extends Controller
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
