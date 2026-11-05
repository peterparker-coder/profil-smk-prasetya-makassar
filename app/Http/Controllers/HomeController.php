<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ProfilSekolah;
use App\Models\Galeri;
use App\Models\TenagaPendidik;
use App\Models\ProgramKeahlian;

class HomeController extends Controller
{
    public function index()
    {
        $beritas = Berita::where('status', 'terbit')
            ->latest()
            ->take(3)
            ->get();

        $profil = ProfilSekolah::first();

        $galeris = Galeri::latest()
            ->take(8)
            ->get();

        $tenagaPendidiks = TenagaPendidik::latest()->get();

        $programKeahlians = ProgramKeahlian::where('status', true)
        ->latest()
        ->get();

        return view('home', compact(
            'beritas',
            'profil',
            'galeris',
            'tenagaPendidiks',
            'programKeahlians'
        ));
    }

    public function show(string $slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'terbit')
            ->firstOrFail();

        return view('berita.show', compact('berita'));
    }
}