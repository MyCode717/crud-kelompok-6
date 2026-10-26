<?php

use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::resource('pelanggans', PelangganController::class);