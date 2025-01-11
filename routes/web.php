<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
});

Route::get('/dashboard_pengguna', function (){
    return view('dashboard_pengguna');
=======
    return view('home');
>>>>>>> d52aab202cacdd22ebf22b7b059e143355b5003f
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register.post');
});
