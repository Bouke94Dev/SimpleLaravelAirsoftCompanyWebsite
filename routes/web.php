<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/locations', function() {
    return view('location');
})->name('site-location');
