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

//$routes = function() {
    Route::get('/', 'SiteController@index')->name('home');
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/contact', 'SiteController@contacts')->name('contacts');

    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{alias}', 'BlogController@inner')->name('blog.inner');

    Route::get('/works', 'WorkController@works')->name('works');
    Route::get('/works/{alias}', 'WorkController@inner')->name('work.inner');
//};

//Route::domain('{localization}.' . config('app.original_domain'))->group($routes);
//Route::domain(config('app.original_domain'))->group($routes);

// Backend on React JS
Route::prefix('admin')->group(function () {
    Route::view('/{path?}', 'dashboard');
});
