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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/createpost','PostController@create')->name('posts.create');
Route::post('/storepost','PostController@store')->name('posts.store');
Route::get('/showpost/{id}','PostController@show')->name('posts.show');

Route::post('/storecomment', 'CommentController@store')->name('comments.store');




