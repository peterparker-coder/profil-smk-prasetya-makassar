<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\ProgramKeahlianController;

class ProgramKeahlianController extends Controller
{
    public function index()
    {
        $programKeahlians = ProgramKeahlian::latest()->paginate(10);

        return view('admin.program-keahlian.index', compact('programKeahlians'));
    }

    public function create()
    {
        return view('admin.program-keahlian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('program-keahlian', 'public');
        }

        ProgramKeahlian::create($validated);

        return redirect()->route('admin.program-keahlian.index')
            ->with('success', 'Program keahlian berhasil ditambahkan.');
    }

    public function show(ProgramKeahlian $programKeahlian)
    {
        return redirect()->route('admin.program-keahlian.index');
    }

    public function edit(ProgramKeahlian $programKeahlian)
    {
        return view('admin.program-keahlian.edit', compact('programKeahlian'));
    }

    public function update(Request $request, ProgramKeahlian $programKeahlian)
    {
        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('foto')) {
            if ($programKeahlian->foto) {
                Storage::disk('public')->delete($programKeahlian->foto);
            }

            $validated['foto'] = $request->file('foto')->store('program-keahlian', 'public');
        }

        $programKeahlian->update($validated);

        return redirect()->route('admin.program-keahlian.index')
            ->with('success', 'Program keahlian berhasil diperbarui.');
    }

    public function destroy(ProgramKeahlian $programKeahlian)
    {
        if ($programKeahlian->foto) {
            Storage::disk('public')->delete($programKeahlian->foto);
        }

        $programKeahlian->delete();

        return redirect()->route('admin.program-keahlian.index')
            ->with('success', 'Program keahlian berhasil dihapus.');
    }

    
}