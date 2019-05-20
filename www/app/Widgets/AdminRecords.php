<?php

namespace App\Widgets;

use App\Repositories\BlogRepository;
use Arrilot\Widgets\AbstractWidget;

class AdminRecords extends AbstractWidget
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

        return view('widgets.admin.records', [
            'config' => $this->config,
            'result' => $repository->list()
        ]);
    }
}
