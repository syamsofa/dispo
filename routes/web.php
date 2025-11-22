<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});


