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

Route::prefix('v1')->group(function () {
    Route::post('/comment', 'Api\CommentController@comment')->name('api.comment');
    Route::post('/contacts', 'Api\ContactsController@contacts')->name('api.contacts');
    Route::post('/subscribe', 'Api\SubscribeController@subscribe')->name('api.subscribe');
    Route::post('/image-upload', 'Api\UploadController@upload')->name('api.image');
});
