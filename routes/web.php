<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Rute untuk halaman utama
Route::get('/', [WebController::class, 'index']);