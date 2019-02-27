<?php

namespace App\Http\Controllers;

class Site extends Controller
{
    public function index()
    {
        return $this->model->all();
    }
}
