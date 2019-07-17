<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\SubscribersRepository;
use Illuminate\Support\Facades\Log;

class SiteController extends Controller
{
    protected $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $result = $this->repository->all();

        return view('index', [
            'result' => $result,
        ]);
    }

    public function unsubscribe(Request $request)
    {
        $hash = $request->route('id');

        $repository = new SubscribersRepository();

        $repository->unsubscribe($hash);

        return view('unsubscribe');
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
