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
use Illuminate\Support\Facades\Input;
use App\Profile;

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

Route::get('social/user', 'PostController@showPost')->name('show');

/*
====================================================
route for profileconfigure begins here

====================================================

*/

Route::get('profile/create', 'ProfileController@create')->middleware('auth')->name('create');
// because am storing that is why i used post storing dat into the database
Route::post('profile/create', 'ProfileController@store')->middleware('auth');

Route::get('profile/index','ProfileController@index')->name('index');

Route::get('profile/edit/{id}', 'ProfileController@edit')->name('edit');

Route::post('profile/edit/{id}', 'ProfileController@update')->name('update');
Route::get('profile/view/{id}', 'ProfileController@view')->name('view');
// Route::post('profile/search', 'ProfileController@search')->middleware('auth');

Route::any('/profile/search', function(){
 $search=input::get('search');
 if($search != ''){
     $profiles = Profile::where('name','LIKE', '%' .$search.'%')
                                ->orwhere('email','LIKE', '%' .$search.'%')
                                ->paginate(5)
                                ->setpath('');
 }
});
