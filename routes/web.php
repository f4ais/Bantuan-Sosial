<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/rtrw', [DashboardController::class, 'rtrw']);
Route::get('/surveyor', [DashboardController::class, 'surveyor']);
Route::get('/penyalur', [DashboardController::class, 'penyalur']);