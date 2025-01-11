<?php

use App\Http\Controllers\TrainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard-pengguna', function () {
    return view('dashboard.pengguna');
});

Route::get('/dashboard-booking', function () {
    return view('dashboard.booking');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register.post');
});

Route::get('/dashboard-kereta', [TrainController::class, 'index'])->name('trains.index');
Route::get('/dashboard-kereta/create', [TrainController::class, 'create'])->name('trains.create');
Route::post('/dashboard-kereta', [TrainController::class, 'store'])->name('trains.store');
Route::get('/dashboard-kereta/{train}/edit', [TrainController::class, 'edit'])->name('trains.edit');
Route::put('/dashboard-kereta/{train}', [TrainController::class, 'update'])->name('trains.update');
Route::delete('/dashboard-kereta/{train}', [TrainController::class, 'destroy'])->name('trains.destroy');
