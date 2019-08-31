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
            case 'blog':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home')
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title')
                    ]
                ];

                $page = __('breadcrumbs.blog.title');
                break;
            case 'map':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home')
                    ],
                    [
                        'label' => __('breadcrumbs.map.title')
                    ]
                ];

                $page = __('breadcrumbs.map.title');
                break;
            case 'about':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home')
                    ],
                    [
                        'label' => __('breadcrumbs.about.title')
                    ]
                ];

                $page = __('breadcrumbs.about.title');
                break;
            case 'contacts':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home')
                    ],
                    [
                        'label' => __('breadcrumbs.contacts.title')
                    ]
                ];

                $page = __('breadcrumbs.contacts.title');
                break;
            case 'blog.category':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home')
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title'),
                        'link' => route('blog')
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title')
                    ]
                ];

                $page = __('breadcrumbs.blog.title');
                break;
            default:
                $breadcrumbs = [];
                $page = __('breadcrumbs.index.title');
                break;
        }

        return view('widgets.breadcrumbs', [
            'config' => $this->config,
            'breadcrumbs' => $breadcrumbs,
            'page' => $page,
        ]);
    }
}
