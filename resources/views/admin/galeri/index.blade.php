@extends('layouts.admin')

@section('title', 'Galeri Sekolah')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Galeri Sekolah</h3>
            <p class="text-muted mb-0">Kelola dokumentasi kegiatan sekolah.</p>
        </div>

        <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
            Tambah Foto
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galeris as $galeri)
                            <tr>
                                <td>{{ $loop->iteration + ($galeris->currentPage() - 1) * $galeris->perPage() }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $galeri->foto) }}"
                                         width="80" height="55"
                                         class="rounded"
                                         style="object-fit: cover;">
                                </td>
                                <td>{{ $galeri->judul }}</td>
                                <td>
                                    {{ $galeri->tanggal ? \Carbon\Carbon::parse($galeri->tanggal)->format('d-m-Y') : '-' }}
                                </td>
                                <td>{{ Str::limit($galeri->deskripsi, 50) }}</td>
                                <td>
                                    <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                       class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada foto galeri.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $galeris->links() }}
        </div>
    </div>
</div>
@endsection