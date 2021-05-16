<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
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

Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/search','SearchController@search');
Route::get('/result', 'SearchController@search_result');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::post('/posts/create','PostController@store');

Route::put('/posts/{post}', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@destroy');
