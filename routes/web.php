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
        ],
        "elements" => [
            "digitalComics" => [
                "name" => 'DIGITAL COMICS',
                "src" => 'buy-comics-digital-comics.png',
                "link" => '#'
            ],
            "dcMerchandise" => [
                "name" => 'DC MERCHANDISE',
                "src" => 'buy-comics-merchandise.png',
                "link" => '#'
            ],
            "subscription" => [
                "name" => 'SUBSCRITION',
                "src" => 'buy-comics-subscriptions.png',
                "link" => '#'
            ],
            "comicShopLocator" => [
                "name" => 'DIGITAL COMICS',
                "src" => 'buy-comics-shop-locator.png',
                "link" => '#'
            ],
            "dcPowerVisa" => [
                "name" => 'DC POWER VISE',
                "src" => 'buy-dc-power-visa.svg',
                "link" => '#'
            ],
        ]      
    ];

    return view('index', $tmp);
});
