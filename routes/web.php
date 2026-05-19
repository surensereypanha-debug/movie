<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homemanage.home');
});
Route::get('movies/usa', function () {
    return view('submovies.movie1');
});
// all route link

