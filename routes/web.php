<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('things', ThingController::class);
    Route::resource('places', PlaceController::class);
    Route::resource('users', UserController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
