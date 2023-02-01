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
    return view('welcome', [
        'heading' => 'Jukebox'
    ]);
});

Route::get('/genres', function () {
    return view('genres', [
        'heading' => 'Jukebox Genres',
        'genrelist' => [
        [
            'id' => '1',
            'title' => 'pop' 
        ],
        
        [
            'id' => '2',
            'title' => 'edm'
        ],
       
        [
            'id' => '3',
            'title' => 'rock'
        ],
        
        [
            'id' => '4',
            'title' => 'hardstyle'
        ],
        
        [
            'id' => '5',
            'title' => 'kpop'
        ]
    ]]);
});
