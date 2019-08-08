<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/blog/pokupka-DJI-Spark', function () {
    return Redirect::to('http://dronepilot.info/blog/pokupka-dji-spark', 301);
});

Route::get('sitemap.xml', 'SiteController@sitemap')->name('sitemap.xml');

//$routes = function() {
Route::group(['middleware' => ['visitors']], function () {
    Route::get('/', 'SiteController@index')->name('home');
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/contact', 'SiteController@contacts')->name('contacts');
    Route::get('/unsubscribe/{hash}', 'SiteController@unsubscribe')->name('unsubscribe');

    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{alias}', 'BlogController@inner')->name('blog.inner');
    Route::get('/blog/category/{category}', 'BlogController@category')->name('blog.category');
    Route::get('/blog/tag/{tag}', 'BlogController@tag')->name('blog.tag');

    Route::get('/map', 'MapController@index')->name('map');
    Route::get('/map/{country}', 'MapController@inner')->name('map.inner');
});
//};

//Route::domain('{localization}.' . config('app.original_domain'))->group($routes);
//Route::domain(config('app.original_domain'))->group($routes);
