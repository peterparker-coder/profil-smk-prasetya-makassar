@extends('layouts.admin')

@section('title', 'Tambah Galeri')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h3 class="fw-bold">Tambah Foto Galeri</h3>
        <p class="text-muted">Tambahkan dokumentasi kegiatan sekolah.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.galeri.store') }}"
                  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Kegiatan</label>
                    <input type="text" name="judul" class="form-control"
                           value="{{ old('judul') }}" required>
                    @error('judul')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kegiatan</label>
                    <input type="date" name="tanggal" class="form-control"
                           value="{{ old('tanggal') }}">
                    @error('tanggal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control"
                           accept="image/jpeg,image/png,image/jpg" required>
                    <small class="text-muted">Format JPG, JPEG, atau PNG. Maksimal 2 MB.</small>
                    @error('foto')
                        <small class="text-danger d-block">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"
                              rows="4">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection