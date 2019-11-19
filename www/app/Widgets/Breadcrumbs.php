<?php

namespace App\Widgets;

use App\Models\Records;
use App\Models\Categories;
use App\Repositories\BlogRepository;
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
     * @param CategoriesRepository $categoryRepository
     * @param TagsRepository $tagsRepository
     * @param BlogRepository $blogRepository
     * @param CategoriesRepository $categoriesRepository
     * @return mixed
     */
    public function run(
        CategoriesRepository $categoryRepository,
        TagsRepository $tagsRepository,
        BlogRepository $blogRepository,
        CategoriesRepository $categoriesRepository
    )
    {
        $uri = Route::currentRouteName();
        $path = Route::current();

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
            case 'blog.inner':
                /* @var $record Records */
                $record = $blogRepository->getByAlias($path);

                /* @var $category Categories */
                $category = $categoriesRepository->get($record->category_id);

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
                        'label' => $category->name,
                        'link' => route('blog.category', ['category' => $category->alias])
                    ],
                    [
                        'label' => $record->name,
                    ],
                ];

                $page = $record->title;
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
            case 'map.inner':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.map.title'),
                        'link' => route('map'),
                    ],
                    [
                        'label' => __('breadcrumbs.map.inner'),
                    ],
                ];

                $page = __('breadcrumbs.map.inner');
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
            case 'search':
                $breadcrumbs = [
                    [
                        'label' => __('breadcrumbs.index.title'),
                        'link' => route('home'),
                    ],
                    [
                        'label' => __('breadcrumbs.search.title'),
                    ],
                ];

                $page = __('breadcrumbs.search.title');
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
