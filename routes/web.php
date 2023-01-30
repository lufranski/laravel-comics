<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.comics');
});

Route::get('/comic', function () {
    return view('pages.comic');
});