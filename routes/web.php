<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Halaman Awal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Lupa Password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Dashboard Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

/*
|--------------------------------------------------------------------------
| Dashboard RT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:rt'])->group(function () {

    Route::get('/rt/dashboard', function () {
        return view('rt.dashboard');
    })->name('rt.dashboard');

});

/*
|--------------------------------------------------------------------------
| Dashboard Surveyor
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:surveyor'])->group(function () {

    Route::get('/surveyor/dashboard', function () {
        return view('surveyor.dashboard');
    })->name('surveyor.dashboard');

});

/*
|--------------------------------------------------------------------------
| Dashboard Penyalur
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:penyalur'])->group(function () {

    Route::get('/penyalur/dashboard', function () {
        return view('penyalur.dashboard');
    })->name('penyalur.dashboard');

});