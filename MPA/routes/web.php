<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genres;
use App\Models\Selection;
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

// All Genres
Route::get('/genres', function () {
    return view('genres', [
        'heading' => 'Jukebox Genres',
        'genreAll' => Genres::All(),
        
    ]);
});

// Single Genre
Route::get('/genres/{id}', function($id) {
    return view('genres', [
        'heading' => 'Chosen Genre',
        'genre' => Genres::find($id)
    ]);
});