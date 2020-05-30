<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('pages/index');
});

Route::get('/about', function () {
    return view('pages/about');
});
*/

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/research', 'PagesController@research');
Route::get('/projects', 'PagesController@projects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');
