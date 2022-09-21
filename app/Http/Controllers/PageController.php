<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Characters page
    public function characters()
    {
        return view('characters');
    }

    // Comics page
    public function comics()
    {
        $comics = config('data.comics');
        $main_banner_items = config('data.main-banner-items');
        return view('comics.index', compact('comics', 'main_banner_items'));
    }

    // Movies page
    public function movies()
    {
        return view('movies');
    }

    // TV page
    public function tv()
    {
        return view('tv');
    }

    // Games page
    public function games()
    {
        return view('games');
    }

    // Collectibles page
    public function collectibles()
    {
        return view('collectibles');
    }

    // Videos page
    public function videos()
    {
        return view('videos');
    }

    // Fans page
    public function fans()
    {
        return view('fans');
    }

    // News page
    public function news()
    {
        return view('news');
    }

    // Shop page
    public function shop()
    {
        return view('shop');
    }
}
