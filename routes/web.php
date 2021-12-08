<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HomeController@index');
Route::get('/guest','Auth\LoginController@GestLogin')->name('login.guest');
Route::get('/posts', 'HomeController@index');
Route::get("/mypage/{user}", 'PostController@UserDetail');

Route::get('/posts/create', 'PostController@create');
Route::get('/posts/search','SearchController@search');
Route::get('/result', 'SearchController@search_result');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::post('/posts/create','PostController@store');
Route::post('/register','HomeController@index');
Route::post('/login','HomeController@index');

Route::put('/posts/{post}', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
