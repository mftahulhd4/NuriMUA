<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Costume;
use App\Models\Portfolio;

class WebController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $categories = Category::all();
        
        // Mengambil 6 kostum terbaru yang statusnya "Tersedia"
        $costumes = Costume::where('is_available', true)->latest()->take(6)->get(); 
        
        // Mengambil 6 portofolio makeup terbaru
        $portfolios = Portfolio::latest()->take(6)->get();

        // Mengirim data ke halaman depan (welcome)
        return view('welcome', compact('categories', 'costumes', 'portfolios'));
    }
}