<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/films', [PageController::class, 'films'])->name('films');
Route::get('/agenda', [PageController::class, 'agenda'])->name('agenda');
Route::get('/about', [PageController::class, 'about'])->name('about');