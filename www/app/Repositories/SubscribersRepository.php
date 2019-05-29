<?php

namespace App\Repositories;

use App\Models\Subscribers;

class SubscribersRepository
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Subscribers $model)
    {
        $this->model = $model;
    }

    public function create()
    {
        //
    }

    public function unsubscribe()
    {
        //
    }

    public function changeStatus()
    {
        //
    }
}
