<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\WorkRepository;

class WorkController extends Controller
{
    protected $repository;

    public function __construct(WorkRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->all();

        return view('work.index', [
            'left' => $result['left'],
            'right' => $result['right']
        ]);
    }

    public function inner(Request $request)
    {
        $result = $this->repository->getByAlias($request->route('alias'));

        if (!$result) {
            abort(404, 'Page not found');
        }

        return view('work.inner', [
            'result' => $result
        ]);
    }
}
