<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@login');
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@register');

