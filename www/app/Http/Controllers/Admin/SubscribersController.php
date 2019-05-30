<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SubscribersRepository;

class SubscribersController extends Controller
{
    protected $repository;

    public function __construct(SubscribersRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->list();

        return view('dashboard.subscribers.list', [
            'result' => $result
        ]);
    }

    public function changeStatus($id)
    {
        $this->repository->changeStatus($id);

        return redirect()->route('subscribers.list');
    }

    public function delete($id)
    {
        $this->repository->destroy($id);

        return redirect()->route('subscribers.list');
    }
}
