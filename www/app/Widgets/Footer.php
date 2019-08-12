<?php

namespace App\Widgets;

use App\Repositories\BlogRepository;
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

        $repository = new BlogRepository();

        $result = $repository->countCategories();

        return view('widgets.footer', [
            'config' => $this->config,
            'uri' => $uri,
            'result' => $result,
        ]);
    }
}
