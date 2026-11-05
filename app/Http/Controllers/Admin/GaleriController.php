<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(10);

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'nullable|date',
        ]);

        $validated['foto'] = $request->file('foto')->store('galeri', 'public');

        Galeri::create($validated);

        return redirect()->route('admin.galeri.index')
            ->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'nullable|date',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($galeri->foto);

            $validated['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update($validated);

        return redirect()->route('admin.galeri.index')
            ->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        Storage::disk('public')->delete($galeri->foto);

        $galeri->delete();

        return redirect()->route('admin.galeri.index')
            ->with('success', 'Data galeri berhasil dihapus.');
    }
}