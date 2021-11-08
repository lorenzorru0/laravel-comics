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
        "linksHeader" => [
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
        ],
        "linksFooter" => [
            "dcComics" => [
                [
                    "name" => 'Characters',
                    "href" => '#' 
                ],
                [
                    "name" => 'Comics',
                    "href" => '#' 
                ],
                [
                    "name" => 'Movies',
                    "href" => '#' 
                ],
                [
                    "name" => 'TV',
                    "href" => '#' 
                ],
                [
                    "name" => 'Games',
                    "href" => '#' 
                ],
                [
                    "name" => 'Videos',
                    "href" => '#' 
                ],
                [
                    "name" => 'News',
                    "href" => '#' 
                ]
            ],
            "shop" => [
                [
                    "name" => 'Shop DC',
                    "href" => '#' 
                ],
                [
                    "name" => 'Shop DC Collectibles',
                    "href" => '#' 
                ]
            ],
            "dc" => [
                [
                    "name" => 'Term Of Use',
                    "href" => '#' 
                ],
                [
                    "name" => 'Privacy policy (New)',
                    "href" => '#' 
                ],
                [
                    "name" => 'Ad Choices',
                    "href" => '#' 
                ],
                [
                    "name" => 'Advertising',
                    "href" => '#' 
                ],
                [
                    "name" => 'Jobs',
                    "href" => '#' 
                ],
                [
                    "name" => 'Subscriptions',
                    "href" => '#' 
                ],
                [
                    "name" => 'Talent Workshops',
                    "href" => '#' 
                ],
                [
                    "name" => 'CPSC Certificates',
                    "href" => '#' 
                ],
                [
                    "name" => 'Ratings',
                    "href" => '#' 
                ],
                [
                    "name" => 'Shop Help',
                    "href" => '#' 
                ],
                [
                    "name" => 'Contact Us',
                    "href" => '#' 
                ],
            ],
            "sites" => [
                [
                    "name" => 'DC',
                    "href" => '#' 
                ],
                [
                    "name" => 'MAD Magazine',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Kids',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Universe',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Power Visa',
                    "href" => '#' 
                ],
            ],
            "social" => [
                [
                    "url" => 'footer-facebook.png',
                    "name" => 'Facebook icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-twitter.png',
                    "name" => 'Twitter icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-youtube.png',
                    "name" => 'Youtube icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-pinterest.png',
                    "name" => 'Pinterest icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-periscope.png',
                    "name" => 'Periscope icon',
                    "href" => '#'
                ],
            ]
        ]
    ];

    return view('index', $tmp);
});
