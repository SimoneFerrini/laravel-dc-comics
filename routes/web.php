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
    $links = [
        [
            'title' => 'Dc Comics',
            'linkSingoli' => [
                'testo1', 'testo2', 'testo3'
            ]
        ],
        [
            'title' => 'Dc',
            'linkSingoli' => [
                'testo1', 'testo2', 'testo3'
            ]
        ],
        [
            'title' => 'Sites',
            'linkSingoli' => [
                'testo1', 'testo2', 'testo3'
            ]
        ],
        [
            'title' => 'Shop',
            'linkSingoli' => [
                'testo1', 'testo2', 'testo3'
            ]
        ],
    ];

    $comics = config('comics');
    $mainLinks = config('mainbottomlinks');

    return view('home', compact('links', 'comics', 'mainLinks'));

});
