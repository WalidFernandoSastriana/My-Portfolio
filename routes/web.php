<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [HomeController::class, 'index']);
