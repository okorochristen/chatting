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

Route::get('social/index', function () {
    return view('social.index');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('social/admin', function () {
    //
})->middleware('admin');

Route::post('social/post', 'PostController@submit_post')->name('post');

Route::post('social/reaction', 'ReactionController@reaction')->name('like');

Route::post('social/comment', 'CommentController@comment')->name('comment');

Route::get('social/user/{name}', 'PostController@showPost')->name('show');