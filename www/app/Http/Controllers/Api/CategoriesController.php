<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CategoriesRepository;

class CategoriesController extends Controller
{
    protected $repository;

    public function __construct(CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function shortList()
    {
        $result = $this->repository->shortList();

        return $this->returnResponse(['result' => $result]);
    }

    public function list()
    {
        $result = $this->repository->list();

        return $this->returnResponse(['result' => $result]);
    }
}
