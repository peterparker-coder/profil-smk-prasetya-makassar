<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count();

        $totalBeritaTerbit = Berita::where('status', 'terbit')->count();

        $totalBeritaDraft = Berita::where('status', 'draft')->count();

        $beritaTerbaru = Berita::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalBerita',
            'totalBeritaTerbit',
            'totalBeritaDraft',
            'beritaTerbaru'
        ));
    }
}