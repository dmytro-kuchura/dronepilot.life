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
Route::get('/unsubscribe/{hash}', 'SiteController@unsubscribe')->name('unsubscribe');

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
            Route::get('/', 'Admin\BlogController@index')->name('blog.list');
            Route::get('/create', 'Admin\BlogController@create')->name('blog.create');
            Route::post('/store', 'Admin\BlogController@store')->name('blog.store');
            Route::get('/edit/{id}', 'Admin\BlogController@edit')->name('blog.edit');
            Route::post('/update/{id}', 'Admin\BlogController@update')->name('blog.update');
            Route::get('/delete/{id}', 'Admin\BlogController@delete')->name('blog.delete');
        });

        Route::prefix('works')->group(function () {
            Route::get('/', 'Admin\WorksController@index')->name('works.list');
            Route::get('/create', 'Admin\WorksController@create')->name('works.create');
            Route::post('/store', 'Admin\WorksController@store')->name('works.store');
            Route::get('/edit/{id}', 'Admin\WorksController@edit')->name('works.edit');
            Route::post('/update/{id}', 'Admin\WorksController@update')->name('works.update');
            Route::get('/delete/{id}', 'Admin\WorksController@delete')->name('works.delete');
        });

        Route::prefix('subscribers')->group(function () {
            Route::get('/', 'Admin\SubscribersController@index')->name('subscribers.list');
            Route::get('/change-status/{id}', 'Admin\SubscribersController@changeStatus')->name('subscribers.change-status');
            Route::get('/delete/{id}', 'Admin\SubscribersController@delete')->name('subscribers.delete');
        });

        Route::prefix('contacts')->group(function () {
            Route::get('/', 'Admin\ContactsController@index')->name('contacts.list');
            Route::get('/show/{id}', 'Admin\ContactsController@show')->name('contacts.show');
            Route::get('/change-status/{id}', 'Admin\ContactsController@changeStatus')->name('contacts.change-status');
            Route::get('/delete/{id}', 'Admin\ContactsController@delete')->name('contacts.delete');
        });
    });
});
