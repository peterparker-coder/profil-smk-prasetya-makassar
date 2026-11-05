@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h4 class="fw-bold mb-1">Edit Program Keahlian</h4>
        <p class="text-muted mb-0">Perbarui informasi program keahlian.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form action="{{ route('admin.program-keahlian.update', $programKeahlian) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Program</label>
                    <input type="text"
                           name="nama_program"
                           class="form-control @error('nama_program') is-invalid @enderror"
                           value="{{ old('nama_program', $programKeahlian->nama_program) }}"
                           required>
                    @error('nama_program')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $programKeahlian->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Program</label>

                    @if ($programKeahlian->foto)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $programKeahlian->foto) }}"
                                 alt="{{ $programKeahlian->nama_program }}"
                                 width="160"
                                 class="rounded">
                        </div>
                    @endif

                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>

                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="1" {{ old('status', $programKeahlian->status) == '1' ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ old('status', $programKeahlian->status) == '0' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('admin.program-keahlian.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection