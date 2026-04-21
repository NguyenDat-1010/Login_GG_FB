<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialController;
use Illuminate\Support\Facades\Auth;

// Google login
Route::get('/auth/google', [SocialController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

// Login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Home (phải login)
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
});

// Trang chủ → login
Route::get('/', function () {
    return redirect('/login');
});