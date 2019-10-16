<?php

namespace App\Http\Controllers;

use App\Repositories\MapRepository;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Repositories\TagsRepository;
use App\Repositories\SitemapRepository;
use App\Repositories\CategoriesRepository;
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

    public function sitemap(
        SitemapRepository $sitemapRepository,
        TagsRepository $tagsRepository,
        CategoriesRepository $categoriesRepository,
        MapRepository $mapRepository
    )
    {
        $pages = $this->repository->all();
        $categories = $categoriesRepository->all();
        $sitemap = $sitemapRepository->all();
        $tags = $tagsRepository->all();
        $maps = $mapRepository->all();

        return response()->view('sitemap', [
            'pages' => $pages,
            'tags' => $tags,
            'categories' => $categories,
            'sitemap' => $sitemap,
            'maps' => $maps,
        ])->header('Content-Type', 'application/xml');
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
