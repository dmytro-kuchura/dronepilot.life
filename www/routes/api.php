<?php

use Illuminate\Http\Request;

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

Route::prefix('v1')->group(function () {
    Route::post('/comment', 'ApiController@comment')->name('api.comment');
    Route::post('/contact', 'ApiController@contacts')->name('api.contacts');

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/list', 'BlogController@list');
        Route::get('/{recordId}', 'BlogController@inner')->where('recordId', '[0-9]+');
        Route::post('/{orderId}/update', 'BlogController@update')->where('recordId', '[0-9]+');
        Route::post('/create', 'BlogController@create');
    });
});
