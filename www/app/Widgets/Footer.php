<?php

namespace App\Widgets;

use App\Repositories\BlogRepository;
use App\Repositories\MapRepository;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Route;

class Footer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $uri = Route::currentRouteName();

        $blogRepository = new BlogRepository();
        $mapRepository = new MapRepository();

        $result = $blogRepository->countCategories();

        $rules = $mapRepository->random(4);

        return view('widgets.footer', [
            'config' => $this->config,
            'uri' => $uri,
            'result' => $result,
            'rules' => $rules,
        ]);
    }
}
