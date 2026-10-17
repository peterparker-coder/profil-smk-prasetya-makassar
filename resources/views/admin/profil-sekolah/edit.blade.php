@extends('layouts.public')

@section('title', 'Kelola Profil Sekolah')

@section('content')
<div class="container py-5">
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Kelola Profil Sekolah</h2>
        <p class="text-secondary mb-0">
            Perbarui sejarah, visi, misi, dan sambutan kepala sekolah.
        </p>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
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

        <form action="{{ route('profil-sekolah.update') }}"
        method="POST">
        @csrf
        @method('PUT')

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <h3 class="h5 fw-bold mb-3">Sejarah Sekolah</h3>
                <textarea name="sejarah" class="form-control" rows="5"
                    placeholder="Masukkan sejarah sekolah...">{{ old('sejarah', $profil->sejarah) }}</textarea>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <h3 class="h5 fw-bold mb-3">Visi dan Misi</h3>

                <label class="form-label">Visi</label>
                <textarea name="visi" class="form-control mb-3" rows="3">{{ old('visi', $profil->visi) }}</textarea>

                <label class="form-label">Misi</label>
                <textarea name="misi" class="form-control" rows="5"
                    placeholder="Tuliskan misi sekolah, satu poin per baris...">{{ old('misi', $profil->misi) }}</textarea>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <h3 class="h5 fw-bold mb-3">Sambutan Kepala Sekolah</h3>

                <label class="form-label">Nama Kepala Sekolah</label>
                <input type="text" name="nama_kepala_sekolah"
                    class="form-control mb-3"
                    value="{{ old('nama_kepala_sekolah', $profil->nama_kepala_sekolah) }}">

                <label class="form-label">Isi Sambutan</label>
                <textarea name="sambutan_kepala_sekolah"
                    class="form-control" rows="5">{{ old('sambutan_kepala_sekolah', $profil->sambutan_kepala_sekolah) }}</textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            Lihat Website
        </a>
    </form>
</div>
@endsection