@extends('layouts.admin')

@section('title', 'Edit Galeri')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h3 class="fw-bold">Edit Galeri</h3>
        <p class="text-muted">Perbarui dokumentasi kegiatan sekolah.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.galeri.update', $galeri->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul Kegiatan</label>
                    <input type="text" name="judul" class="form-control"
                           value="{{ old('judul', $galeri->judul) }}" required>
                    @error('judul')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kegiatan</label>
                    <input type="date" name="tanggal" class="form-control"
                           value="{{ old('tanggal', $galeri->tanggal) }}">
                    @error('tanggal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Saat Ini</label>
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $galeri->foto) }}"
                             width="150" height="100"
                             class="rounded"
                             style="object-fit: cover;">
                    </div>

                    <label class="form-label">Ganti Foto</label>
                    <input type="file" name="foto" class="form-control"
                           accept="image/jpeg,image/png,image/jpg">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                    @error('foto')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"
                              rows="4">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection