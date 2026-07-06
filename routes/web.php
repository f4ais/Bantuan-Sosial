<?php

use Illuminate\Support\Facades\Route;
use App\Models\Warga;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ProgramBantuanController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/survey/upload', function () {

    $wargas = Warga::all();

    return view('survey.upload', compact('wargas'));

})->name('survey.upload');

Route::get('/bantuan/upload', function () {

    return view('bantuan.upload');

})->name('bantuan.upload');

Route::resource('warga', WargaController::class);

Route::resource('survey', SurveyController::class)
    ->except(['show']);

Route::resource('bantuan', ProgramBantuanController::class)
    ->except(['show']);