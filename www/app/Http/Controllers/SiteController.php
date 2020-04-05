<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MapRepository;
use App\Repositories\BlogRepository;
use App\Repositories\TagsRepository;
use App\Repositories\SitemapRepository;
use App\Repositories\CategoriesRepository;
use App\Repositories\SubscribersRepository;

class SiteController extends Controller
{
    const RECORDS_AT_MAIN_PAGE = 4;

    protected $blogRepository;
    protected $sitemapRepository;
    protected $tagsRepository;
    protected $categoriesRepository;
    protected $mapRepository;

    public function __construct(
        BlogRepository $blogRepository,
        SitemapRepository $sitemapRepository,
        TagsRepository $tagsRepository,
        CategoriesRepository $categoriesRepository,
        MapRepository $mapRepository
    )
    {
        $this->blogRepository = $blogRepository;
        $this->sitemapRepository = $sitemapRepository;
        $this->tagsRepository = $tagsRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->mapRepository = $mapRepository;
    }

    /**
     * Main page
     */
    public function index()
    {
        $result = $this->blogRepository->main(self::RECORDS_AT_MAIN_PAGE);

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

    /**
     * Contacts page
     */
    public function contacts()
    {
        return view('contact');
    }

    /**
     * About page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * sitemap.xml
     */
    public function sitemap()
    {
        $pages = $this->blogRepository->all();
        $categories = $this->categoriesRepository->all();
        $sitemap = $this->sitemapRepository->all();
        $tags = $this->tagsRepository->all();
        $maps = $this->mapRepository->all();

        return response()->view('sitemap', [
            'pages' => $pages,
            'tags' => $tags,
            'categories' => $categories,
            'sitemap' => $sitemap,
            'maps' => $maps,
        ])->header('Content-Type', 'application/xml');
    }

    /**
     * Search page
     */
    public function search(Request $request)
    {
        $query = $request->query('search');

        $result = $this->blogRepository->search($query);

        return view('search', [
            'result' => $result
        ]);
    }
}
