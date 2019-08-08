<?php

namespace App\Widgets;

use App\Repositories\BlogRepository;
use Arrilot\Widgets\AbstractWidget;

class Categories extends AbstractWidget
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

        $result = $repository->countCategories();

        return view('widgets.categories', [
            'config' => $this->config,
            'result' => $result,
        ]);
    }
}
