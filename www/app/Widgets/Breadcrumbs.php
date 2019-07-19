<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Route;

class Breadcrumbs extends AbstractWidget
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

        return view('widgets.breadcrumbs', [
            'config' => $this->config,
            'uri' => $uri,
        ]);
    }
}
