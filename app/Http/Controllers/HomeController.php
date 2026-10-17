<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ProfilSekolah;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::where('status', 'terbit')
            ->latest()
            ->take(3)
            ->get();

        $profil = ProfilSekolah::first();

        return view('home', compact('beritas', 'profil'));
    }

    public function show(string $slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'terbit')
            ->firstOrFail();

        return view('berita.show', compact('berita'));
    }
}
