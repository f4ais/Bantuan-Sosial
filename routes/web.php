<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;

Route::get('/', function () {
    return redirect()->route('penerima.index');
});

Route::resource('penerima', PenerimaController::class);