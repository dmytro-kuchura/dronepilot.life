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
    Route::post('/comment', 'CommentController@comment')->name('api.comment');
    Route::post('/contacts', 'ContactsController@contacts')->name('api.contacts');
    Route::post('/subscribe', 'SubscribeController@subscribe')->name('api.subscribe');
    Route::post('/image-upload', 'UploadController@upload')->name('api.image');
});
