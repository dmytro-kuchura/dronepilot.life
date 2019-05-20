<?php

namespace App\Widgets;

use App\Repositories\CommentsRepository;
use Arrilot\Widgets\AbstractWidget;

class AdminComments extends AbstractWidget
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
        $repository = new CommentsRepository();

        return view('widgets.admin.comments', [
            'config' => $this->config,
            'result' => $repository->last()
        ]);
    }
}
