<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Fronted Forms
Route::prefix('v1')->group(function () {
    Route::namespace('Api')->group(function () {
        Route::post('/comment', 'CommentController@comment')->name('api.comment');
        Route::post('/contacts', 'ContactsController@contacts')->name('api.contacts');
        Route::post('/subscribe', 'SubscribeController@subscribe')->name('api.subscribe');
        Route::post('/image-upload', 'UploadController@upload')->name('api.image');
    });
});

// Mobile App
Route::prefix('v2')->group(function () {
    Route::prefix('blog')->group(function () {
        Route::namespace('Api')->group(function () {
            Route::get('/', 'BlogController@list')->name('blog.list');
            Route::put('/{id}', 'BlogController@update')->name('blog.update');
            Route::get('/{id}', 'BlogController@inner')->name('blog.inner');
            Route::get('/tag/{tag}', 'BlogController@tag')->name('blog.tag');
            Route::get('/category/{category}', 'BlogController@category')->name('blog.category');
        });
    });

    Route::prefix('categories')->group(function () {
        Route::namespace('Api')->group(function () {
            Route::get('/', 'CategoriesController@list')->name('categories.list');
            Route::get('/short', 'CategoriesController@shortList')->name('categories.short.list');
            Route::get('/{id}', 'CategoriesController@inner')->name('categories.inner');
        });
    });

    Route::prefix('map')->group(function () {
        Route::namespace('Api')->group(function () {
            Route::get('/', 'MapsController@list')->name('map.list');
            Route::get('/{id}', 'MapsController@inner')->name('map.inner');
        });
    });
});

// React Dashboard
Route::prefix('v3')->group(function () {
    Route::group(['middleware' => 'guest:api'], function () {
        Route::namespace('Api\Auth')->group(function () {
            Route::post('login', 'LoginController')->name('login');
            Route::post('register', 'RegisterController')->name('register');

            Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
            Route::post('password/reset', 'ResetPasswordController@reset');
        });
    });

    Route::middleware('auth:api')->group(function () {
        Route::namespace('Api\Auth')->group(function () {
            Route::get('profile', 'ProfileController@profile')->name('profile');
            Route::post('logout', 'LogoutController@logout')->name('logout');
        });
    });
});
