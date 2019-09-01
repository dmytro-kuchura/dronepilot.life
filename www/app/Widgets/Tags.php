<?php

namespace App\Widgets;

use App\Repositories\TagsRepository;
use Arrilot\Widgets\AbstractWidget;

class Tags extends AbstractWidget
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
        $repository = new TagsRepository();

        $result = $repository->all();

        return view('widgets.tags', [
            'config' => $this->config,
            'result' => $result,
        ]);
    }
}
