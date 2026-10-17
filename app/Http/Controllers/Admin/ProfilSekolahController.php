<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function edit()
    {
        $profil = ProfilSekolah::first();

        if (!$profil) {
            $profil = ProfilSekolah::create([]);
        }

        return view('admin.profil-sekolah.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'nama_kepala_sekolah' => 'nullable|string|max:255',
            'sambutan_kepala_sekolah' => 'nullable|string',
        ]);

        $profil = ProfilSekolah::first();

        if (!$profil) {
            ProfilSekolah::create($validated);
        } else {
            $profil->update($validated);
        }

        return redirect()
        ->route('profil-sekolah.edit')
        ->with('success', 'Profil sekolah berhasil diperbarui.');
    }
}