
@extends('layouts.public')

@section('content')
<div class="container py-5">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">Berita dan Pengumuman</h2>
            <p class="text-secondary mb-0">
                Kelola informasi sekolah SMKS Prasetya Makassar.
            </p>
        </div>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary">
            Tambah Berita
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form pencarian berita --}}
    <form action="{{ route('admin.berita.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input
                type="search"
                name="search"
                class="form-control"
                placeholder="Cari judul, ringkasan, atau isi berita..."
                value="{{ $search ?? request('search') }}"
                aria-label="Cari berita"
            >

            <button type="submit" class="btn btn-primary">
                Cari
            </button>

            @if (request('search'))
                <a href="{{ route('admin.berita.index') }}"
                   class="btn btn-outline-secondary">
                    Reset
                </a>
            @endif
        </div>
    </form>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3">No.</th>
                        <th>Judul</th>
                        <th>Tanggal Publikasi</th>
                        <th>Status</th>
                        <th class="text-end pe-3">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($beritas as $berita)
                        <tr>
                            <td class="ps-3">
                                {{ $beritas->firstItem() + $loop->index }}
                            </td>

                            <td>
                                <div class="fw-semibold">{{ $berita->judul }}</div>
                                <small class="text-secondary">{{ $berita->slug }}</small>
                            </td>

                            <td>
                                {{ $berita->tanggal_publikasi?->format('d/m/Y') ?? '-' }}
                            </td>

                            <td>
                                @if ($berita->status === 'terbit')
                                    <span class="badge text-bg-success">Terbit</span>
                                @else
                                    <span class="badge text-bg-secondary">Draft</span>
                                @endif
                            </td>

                            <td class="text-end pe-3">
                                <div class="d-inline-flex gap-2">
                                    <a
                                        href="{{ route('admin.berita.edit', $berita) }}"
                                        class="btn btn-sm btn-outline-primary"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.berita.destroy', $berita) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus berita ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                        >
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-5 text-secondary">
                                @if (request('search'))
                                    Berita dengan kata kunci
                                    "{{ request('search') }}" tidak ditemukan.
                                @else
                                    Belum ada berita. Silakan tambahkan berita pertama.
                                @endif
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $beritas->links() }}
    </div>
</div>
@endsection
