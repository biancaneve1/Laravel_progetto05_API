<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('/animes/iist', [AnimeController::class, 'index'])->name('animes.list');

Route::get('/animes/detail/{id}', [AnimeController::class, 'show'])->name('animes.detail');