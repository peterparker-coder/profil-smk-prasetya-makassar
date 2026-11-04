
@extends('layouts.admin')

@section('title', 'Edit Data Tenaga Pendidik')
@section('breadcrumb', 'Admin / Data Guru / Edit')

@section('content')
<div class="container-fluid py-3">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Edit Data Guru dan Tenaga Kependidikan</h2>
        <p class="text-secondary mb-0">Perbarui informasi tenaga pendidik sekolah.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <form action="{{ route('admin.tenaga-pendidik.update', $tenagaPendidik->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama"
                               class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama', $tenagaPendidik->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">NIP</label>
                        <input type="text" name="nip"
                               class="form-control @error('nip') is-invalid @enderror"
                               value="{{ old('nip', $tenagaPendidik->nip) }}">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <select name="kategori"
                                class="form-select @error('kategori') is-invalid @enderror"
                                required>
                            <option value="">Pilih Kategori</option>
                            <option value="Guru" {{ old('kategori', $tenagaPendidik->kategori) == 'Guru' ? 'selected' : '' }}>Guru</option>
                            <option value="Tenaga Kependidikan" {{ old('kategori', $tenagaPendidik->kategori) == 'Tenaga Kependidikan' ? 'selected' : '' }}>Tenaga Kependidikan</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan"
                               class="form-control @error('jabatan') is-invalid @enderror"
                               value="{{ old('jabatan', $tenagaPendidik->jabatan) }}" required>
                        @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran"
                               class="form-control @error('mata_pelajaran') is-invalid @enderror"
                               value="{{ old('mata_pelajaran', $tenagaPendidik->mata_pelajaran) }}">
                        @error('mata_pelajaran')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Foto</label>

                        @if($tenagaPendidik->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $tenagaPendidik->foto) }}"
                                     alt="Foto {{ $tenagaPendidik->nama }}"
                                     width="100" height="100"
                                     class="rounded object-fit-cover">
                            </div>
                        @endif

                        <input type="file" name="foto"
                               class="form-control @error('foto') is-invalid @enderror"
                               accept="image/jpeg,image/png,image/jpg">
                        <small class="text-secondary">Kosongkan jika tidak ingin mengganti foto. Maksimal 2 MB.</small>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('admin.tenaga-pendidik.index') }}"
                       class="btn btn-outline-secondary">Kembali</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
