<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function list()
    {
        return view('list ');
    }

    public function inner()
    {
        return view('inner');
    }
}
