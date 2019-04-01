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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/stories', 'StoryController')->except('show');
Route::get('/stories/{story}/{sort}','StoryController@show')->name('stories.show');

Route::get('/comment/{id}', 'CommentController@create')->name('comments.create');
Route::post('/comments', 'CommentController@store')->name('comments.store');
