<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // <-- PENTING: Panggil Model Berita

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil semua data berita dari database, urutkan dari yang terbaru
        $dataBerita = Berita::latest()->get();

        // 2. Kirim variabel '$dataBerita' ke view 'home'
        return view('home', compact('dataBerita'));
    }
}