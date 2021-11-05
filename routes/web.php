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

Route::get('/', function () {
    $data = config('comics');

    $tmp = [
        "comics" => $data,
        "link" => [
            "characters" => [
                "name" => 'CHARACTERS',
                "link" => '#',
                "active" => false
            ],
            "comics" => [
                "name" => 'COMICS',
                "link" => '#',
                "active" => true
            ],
            "movies" => [
                "name" => 'MOVIES',
                "link" => '#',
                "active" => false
            ],
            "tv" => [
                "name" => 'TV',
                "link" => '#',
                "active" => false
            ],
            "games" => [
                "name" => 'GAMES',
                "link" => '#',
                "active" => false
            ],
            "collectibles" => [
                "name" => 'COLLECTIBLES',
                "link" => '#',
                "active" => false
            ],
            "videos" => [
                "name" => 'VIDEOS',
                "link" => '#',
                "active" => false
            ],
            "fans" => [
                "name" => 'FANS',
                "link" => '#',
                "active" => false
            ],
            "news" => [
                "name" => 'NEWS',
                "link" => '#',
                "active" => false
            ],
            "shop" => [
                "name" => 'SHOP',
                "link" => '#',
                "active" => false
            ]
        ]
    ];

    return view('index', $tmp);
});
