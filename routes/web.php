<?php

use Illuminate\Support\Facades\Route;
use App\Models\Costume;

Route::get('/', function () {
    // Mengambil semua data kostum yang status 'is_available'-nya aktif (true)
    $costumes = Costume::where('is_available', true)->get();
    
    // Mengirim data kostum ke halaman welcome
    return view('welcome', compact('costumes'));
});