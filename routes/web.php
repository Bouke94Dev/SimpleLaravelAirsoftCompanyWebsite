<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteLocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/sites/locations', [SiteLocationController::class, 'index'])->name('sites.api.locations');
Route::get('/sites/locations/{id}', [SiteLocationController::class, 'show'])->name('sites.api.location');

Route::get('/sites/feed', [SiteController::class, 'feed'])->name('sites.rss.feed');

Route::get('/sites', [SiteController::class, 'index'])->name('sites.index');
Route::get('/sites/{id}', [SiteController::class, 'show'])->name('sites.show');
