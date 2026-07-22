<?php

use Illuminate\Support\Facades\Route;
use App\Models\Costume;
use App\Models\Portfolio;
use App\Models\Category; // Tambahan untuk memanggil model Kategori
use Illuminate\Http\Request; // Tambahan untuk menangani pencarian

Route::get('/', function (Request $request) {
    // 1. Ambil semua data Kategori untuk pilihan dropdown
    $categories = Category::all();

    // 2. Siapkan query dasar untuk Kostum
    $query = Costume::query();

    // 3. Jika pengunjung mengetik di kolom pencarian
    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    // 4. Jika pengunjung memilih filter kategori
    if ($request->filled('category')) {
        $query->where('category_id', $request->category);
    }

    // 5. Eksekusi query untuk mendapatkan hasil kostum
    $costumes = $query->get();
    
    // 6. Ambil 8 foto portofolio terbaru
    $portfolios = Portfolio::latest()->take(8)->get(); 
    
    // 7. Kirim semua data ke tampilan
    return view('welcome', compact('costumes', 'portfolios', 'categories'));
});