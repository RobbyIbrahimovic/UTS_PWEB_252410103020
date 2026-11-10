<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// routing halaman login
Route::get('/', [PageController::class, 'login'])->name('login');

// routing halaman dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// routing halaman profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// routing hal pengelolaan evento
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
