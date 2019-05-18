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

// Backend
Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('register', 'Auth\RegisterController@register')->name('register');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'Admin\MainController@index')->name('dashboard');
        Route::get('/dashboard', 'Admin\MainController@index')->name('dashboard');

        Route::prefix('blog')->group(function () {
            Route::get('/', 'Admin\MainController@index')->name('blog.list');
            Route::get('/create', 'Admin\MainController@index')->name('blog.create');
            Route::get('/edit/{id}', 'Admin\MainController@index')->name('blog.edit');
            Route::get('/delete/{id}', 'Admin\MainController@index')->name('blog.delete');
        });

        Route::prefix('works')->group(function () {
            Route::get('/', 'Admin\MainController@index')->name('works.list');
            Route::get('/create', 'Admin\MainController@index')->name('works.create');
            Route::get('/edit/{id}', 'Admin\MainController@index')->name('works.edit');
            Route::get('/delete/{id}', 'Admin\MainController@index')->name('works.delete');
        });
    });
});
