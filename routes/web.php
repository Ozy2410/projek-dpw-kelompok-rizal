<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register.post');
});
