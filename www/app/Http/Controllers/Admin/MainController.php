<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
//        dd(Auth::user());

        return view('dashboard.dashboard');
    }
}
