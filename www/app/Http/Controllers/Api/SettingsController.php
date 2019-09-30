<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\SettingsRepository;

class SettingsController extends Controller
{
    protected $repository;

    public function __construct(SettingsRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function store()
    {
        //
    }

    public function update()
    {
        //
    }
}
