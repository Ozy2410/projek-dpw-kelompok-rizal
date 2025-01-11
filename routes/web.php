<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register.post');
    Route::get('/dashboard-pengguna', 'index')->name('users.index');
    Route::post('/dashboard-pengguna', 'store')->name('users.store');
    Route::put('/dashboard-pengguna/{user}', 'update')->name('users.update');
    Route::delete('/dashboard-pengguna/{user}', 'destroy')->name('users.destroy');
});

Route::controller(TrainController::class)->group(function () {
    Route::get('/dashboard-kereta', 'index')->name('trains.index');
    Route::get('/dashboard-kereta/create', 'create')->name('trains.create');
    Route::post('/dashboard-kereta', 'store')->name('trains.store');
    Route::get('/dashboard-kereta/{train}/edit', 'edit')->name('trains.edit');
    Route::put('/dashboard-kereta/{train}', 'update')->name('trains.update');
    Route::delete('/dashboard-kereta/{train}', 'destroy')->name('trains.destroy');
});

Route::controller(BookingController::class)->group(function () {
    Route::get('/dashboard-booking', 'index')->name('bookings.index');
    Route::post('/dashboard-booking', 'store')->name('bookings.store');
    Route::put('/dashboard-booking/{booking}', 'update')->name('bookings.update');
    Route::delete('/dashboard-booking/{booking}', 'destroy')->name('bookings.destroy');
});
