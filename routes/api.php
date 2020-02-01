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

Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\RegisterController@login');

Route::middleware('auth:api')->group(function () {

    Route::resource('posts', 'Api\PostController')->except(['index', 'create']);

});

