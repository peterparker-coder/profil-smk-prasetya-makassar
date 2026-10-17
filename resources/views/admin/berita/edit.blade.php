
@extends('layouts.public')

@section('content')
<div class="container py-5">
    <div class="mb-4">
        <a href="{{ route('admin.berita.index') }}"
           class="text-decoration-none text-secondary">Kembali ke daftar berita</a>
        <h2 class="fw-bold mt-3 mb-1">Edit Berita</h2>
        <p class="text-secondary">Perbarui informasi berita sekolah.</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.berita.update', $berita) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul Berita</label>
                    <input type="text" id="judul" name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul', $berita->judul) }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ringkasan" class="form-label fw-semibold">Ringkasan</label>
                    <textarea id="ringkasan" name="ringkasan" rows="3"
                              class="form-control @error('ringkasan') is-invalid @enderror">{{ old('ringkasan', $berita->ringkasan) }}</textarea>
                    @error('ringkasan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label fw-semibold">Isi Berita</label>
                    <textarea id="isi" name="isi" rows="8"
                              class="form-control @error('isi') is-invalid @enderror"
                              required>{{ old('isi', $berita->isi) }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if ($berita->gambar)
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Gambar Saat Ini</label>
                        <div>
                            <img src="{{ asset('storage/' . $berita->gambar) }}"
                                 alt="Gambar {{ $berita->judul }}"
                                 class="img-thumbnail"
                                 style="max-width: 260px; max-height: 180px; object-fit: cover;">
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="gambar" class="form-label fw-semibold">Ganti Gambar</label>
                    <input type="file" id="gambar" name="gambar"
                           class="form-control @error('gambar') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png,.webp">
                    <div class="form-text">Kosongkan jika tidak ingin mengganti gambar. Maksimal 2 MB.</div>
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_publikasi" class="form-label fw-semibold">
                            Tanggal Publikasi
                        </label>
                        <input type="date" id="tanggal_publikasi" name="tanggal_publikasi"
                               class="form-control @error('tanggal_publikasi') is-invalid @enderror"
                               value="{{ old('tanggal_publikasi', $berita->tanggal_publikasi?->format('Y-m-d')) }}">
                        @error('tanggal_publikasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label fw-semibold">Status</label>
                        <select id="status" name="status"
                                class="form-select @error('status') is-invalid @enderror" required>
                            <option value="draft"
                                @selected(old('status', $berita->status) === 'draft')>Draft</option>
                            <option value="terbit"
                                @selected(old('status', $berita->status) === 'terbit')>Terbit</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('admin.berita.index') }}"
                       class="btn btn-outline-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
