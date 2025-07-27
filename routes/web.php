<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteLocationController;

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/sites/locations', [SiteLocationController::class, 'index'])->name('sites.api.locations');
Route::get('/sites/locations/{id}', [SiteLocationController::class, 'show'])->name('sites.api.location');

Route::get('/sites', [SiteController::class, 'index'])->name('sites.index');
Route::get('/sites/{id}', [SiteController::class, 'show'])->name('sites.show');