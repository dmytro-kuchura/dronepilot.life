<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacts()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
