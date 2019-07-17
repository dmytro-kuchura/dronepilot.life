<?php

namespace App\Widgets;

use App\Repositories\BlogRepository;
use Arrilot\Widgets\AbstractWidget;

class Sidebar extends AbstractWidget
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
        $repository = new BlogRepository();

        $recent = $repository->getRecent();

        return view('widgets.sidebar', [
            'config' => $this->config,
            'recent' => $recent,
        ]);
    }
}
