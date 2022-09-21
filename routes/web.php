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
Route::get('/', function () {
    return view('characters');
})->name('characters');

// Comics
Route::get('/comics', function () {
    $comics = config('data.comics');
    $main_banner_items = config('data.main-banner-items');
    return view('comics.index', compact('comics', 'main_banner_items'));
})->name('comics.index');


    // | Subpage of Comics page
    Route::get('/comics/{id}', function ($id) {
        $comics = config('data.comics');
        $comic = $comics[$id];
        $comic_banner_items = config('data.comic-banner-items');

        return view('comics.show', compact('comic', 'comic_banner_items'));
    })->name('comics.show');



// Movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Games
Route::get('/games', function () {
    return view('games');
})->name('games');

// Collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// News
Route::get('/news', function () {
    return view('news');
})->name('news');

// Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

