<?php

use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('editions', EditionController::class);    
        Route::resource('artists', ArtistController::class);    
    });


require __DIR__ . '/auth.php';
