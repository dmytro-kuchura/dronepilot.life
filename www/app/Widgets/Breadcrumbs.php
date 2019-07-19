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

        switch ($uri) {
            case 'about':
                $breadcrumbs = [
                    [
                        'label' => 'Home',
                        'link' => route('home')
                    ],
                    [
                        'label' => 'About'
                    ]
                ];
                break;
            case 'contacts':
                $breadcrumbs = [
                    [
                        'label' => 'Home',
                        'link' => route('home')
                    ],
                    [
                        'label' => 'Contacts'
                    ]
                ];
                break;
            default:
                $breadcrumbs = [
                    [
                        'label' => 'Home',
                    ],
                ];
                break;
        }

        return view('widgets.breadcrumbs', [
            'config' => $this->config,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
