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


Route::group(['middleware' => ['auth']], function(){

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create'); //投稿作成画面表示用
Route::get('/posts/{post}', 'PostController@show');


Route::post('/posts', 'PostController@store'); //投稿作成画面で保存ボタン押下された時

Route::get('/posts/{post}/edit', 'PostController@edit'); //投稿編集画面表示

Route::put('/posts/{post}', 'PostController@update'); //投稿編集実行

Route::delete('/posts/{post}', 'PostController@delete');//投稿削除実行
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');
