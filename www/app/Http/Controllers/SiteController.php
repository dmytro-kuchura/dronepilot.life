<?php

namespace App\Http\Controllers;

use App\Models\Records;

class SiteController extends Controller
{
    public function index()
    {
        $records = Records::where('status', 1)->get();

        $left = [];

        $right = [];

        foreach ($records as $key => $obj) {
            if ($key & 1) {
                $left[] = $obj;
            } else {
                $right[] = $obj;
            }
        }

        return view('index', [
            'left' => $left,
            'right' => $right
        ]);
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
