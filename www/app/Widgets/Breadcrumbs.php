<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Route;
use Arrilot\Widgets\AbstractWidget;
use App\Repositories\TagsRepository;
use App\Repositories\CategoriesRepository;

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
        $categoryRepository = new CategoriesRepository();
        $tagsRepository = new TagsRepository();

        $uri = Route::currentRouteName();

        switch ($uri) {
            case 'blog':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title'),
                    ],
                ];

                $page = __('breadcrumbs.blog.title');
                break;
            case 'map':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.map.title'),
                    ],
                ];

                $page = __('breadcrumbs.map.title');
                break;
            case 'about':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.about.title'),
                    ],
                ];

                $page = __('breadcrumbs.about.title');
                break;
            case 'contacts':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.contacts.title'),
                    ],
                ];

                $page = __('breadcrumbs.contacts.title');
                break;
            case 'blog.category':
                $category = $categoryRepository->getCategoryByAlias(Route::current()->parameter('category'));

                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title'),
                        'link' => route('blog'),
                    ],
                    [
                        'label' => $category->title ? $category->title : $category->name,
                    ],
                ];

                $page = $category->title ? 'Записи категории: ' . $category->title : 'Записи категории: ' . $category->name;
                break;
            case 'blog.tag':
                $tag = $tagsRepository->getTagByAlias(Route::current()->parameter('tag'));

                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.blog.title'),
                        'link' => route('blog'),
                    ],
                    [
                        'label' => $tag->title ? $tag->title : $tag->name,
                    ],
                ];

                $page = $tag->title ? 'Записи по тегу: ' . $tag->title : 'Записи по тегу: ' . $tag->name;
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
