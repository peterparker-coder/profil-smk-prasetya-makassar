<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaPendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaPendidikController extends Controller
{
    public function index()
    {
        $tenagaPendidiks = TenagaPendidik::latest()->paginate(10);

        return view('admin.tenaga-pendidik.index', compact('tenagaPendidiks'));
    }

    public function create()
    {
        return view('admin.tenaga-pendidik.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'kategori' => 'required|in:Guru,Tenaga Kependidikan',
            'jabatan' => 'required|string|max:255',
            'mata_pelajaran' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('tenaga-pendidik', 'public');
        }

        TenagaPendidik::create($validated);

        return redirect()->route('admin.tenaga-pendidik.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(TenagaPendidik $tenagaPendidik)
    {
        return view('admin.tenaga-pendidik.edit', compact('tenagaPendidik'));
    }

    public function update(Request $request, TenagaPendidik $tenagaPendidik)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'kategori' => 'required|in:Guru,Tenaga Kependidikan',
            'jabatan' => 'required|string|max:255',
            'mata_pelajaran' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($tenagaPendidik->foto) {
                Storage::disk('public')->delete($tenagaPendidik->foto);
            }

            $validated['foto'] = $request->file('foto')->store('tenaga-pendidik', 'public');
        }

        $tenagaPendidik->update($validated);

        return redirect()->route('admin.tenaga-pendidik.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(TenagaPendidik $tenagaPendidik)
    {
        if ($tenagaPendidik->foto) {
            Storage::disk('public')->delete($tenagaPendidik->foto);
        }

        $tenagaPendidik->delete();

        return redirect()->route('admin.tenaga-pendidik.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}