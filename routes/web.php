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

// Characters (Homepage)
Route::get('/', 'PageController@characters')->name('characters');

// Comics - CRUD Routes
Route::resource('comics', 'ComicController');

// Movies
Route::get('/movies', 'PageController@movies')->name('movies');

// TV
Route::get('/tv', 'PageController@tv')->name('tv');

// Games
Route::get('/games', 'PageController@games')->name('games');

// Collectibles
Route::get('/collectibles', 'PageController@collectibles')->name('collectibles');

// Videos
Route::get('/videos', 'PageController@videos')->name('videos');

// Fans
Route::get('/fans', 'PageController@fans')->name('fans');

// News
Route::get('/news', 'PageController@news')->name('news');

// Shop
Route::get('/shop', 'PageController@shop')->name('shop');

