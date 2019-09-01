<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\SitemapRepository;
use App\Repositories\SubscribersRepository;

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

    public function sitemap()
    {
        $repository = new SitemapRepository();

        $pages = $this->repository->all();

        $sitemap = $repository->all();

        return view('sitemap', [
            'pages' => $pages,
            'sitemap' => $sitemap,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query('search');

        $result = $this->repository->search($query);

        return view('search', [
            'result' => $result
        ]);
    }
}
