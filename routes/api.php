<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/editions', [ApiController::class, 'index']);
Route::get('/editions/{edition}', [ApiController::class, 'showEdition']);
Route::get('/artists/{artist}', [ApiController::class, 'showArtist']);
Route::get('/songs/{song}', [ApiController::class, 'showSong']);
Route::get('/songs', [ApiController::class, 'showSongs']);
