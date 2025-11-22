<?php

use App\Http\Controllers\SuratmasuksController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/suratmasuks', SuratmasuksController::class);

Route::apiResource('/users',UsersController::class);

Route::get('suratmasuks/showok/{suratmasuk}', [SuratmasuksController::class, 'showok'])->name('suratmasuks.showok');