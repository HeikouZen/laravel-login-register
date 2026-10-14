<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('landingPage');
});

Route::post('/register', [UserController::class, 'registerAcc']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);