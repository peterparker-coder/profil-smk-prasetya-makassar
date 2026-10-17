<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $beritas = Berita::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('judul', 'like', "%{$search}%")
                      ->orWhere('ringkasan', 'like', "%{$search}%")
                      ->orWhere('isi', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.berita.index', compact('beritas', 'search'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'tanggal_publikasi' => 'nullable|date',
            'status' => 'required|in:draft,terbit',
        ]);

        $slug = Str::slug($validated['judul']);
        $slugDasar = $slug;
        $nomor = 1;

        while (Berita::where('slug', $slug)->exists()) {
            $slug = $slugDasar . '-' . $nomor++;
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')
                ->store('berita', 'public');
        }

        Berita::create($validated);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'tanggal_publikasi' => 'nullable|date',
            'status' => 'required|in:draft,terbit',
        ]);

        $slug = Str::slug($validated['judul']);
        $slugDasar = $slug;
        $nomor = 1;

        while (
            Berita::where('slug', $slug)
                ->where('id', '!=', $berita->id)
                ->exists()
        ) {
            $slug = $slugDasar . '-' . $nomor++;
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $validated['gambar'] = $request->file('gambar')
                ->store('berita', 'public');
        } else {
            unset($validated['gambar']);
        }

        $berita->update($validated);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}
