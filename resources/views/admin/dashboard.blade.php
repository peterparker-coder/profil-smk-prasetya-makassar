@extends('layouts.admin')

@section('title', 'Dashboard')
@section('breadcrumb', 'Admin / Dashboard')

@section('content')

<div class="container-fluid py-3">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">Dashboard</h2>
        <p class="text-secondary mb-0">
            Selamat datang di Panel Administrasi SMKS Prasetya Makassar.
        </p>
    </div>

    {{-- Statistik Berita --}}
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Total Berita</p>
                    <h2 class="fw-bold mb-0">{{ $totalBerita }}</h2>
                    <small class="text-secondary">Seluruh berita</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Berita Terbit</p>
                    <h2 class="fw-bold text-success mb-0">
                        {{ $totalBeritaTerbit }}
                    </h2>
                    <small class="text-secondary">Berita yang dipublikasikan</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Berita Draft</p>
                    <h2 class="fw-bold text-secondary mb-0">
                        {{ $totalBeritaDraft }}
                    </h2>
                    <small class="text-secondary">Berita belum diterbitkan</small>
                </div>
            </div>
        </div>

    </div>

    {{-- Berita Terbaru --}}
    <div class="card border-0 shadow-sm">

        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Berita Terbaru</h5>

            <a href="{{ route('admin.berita.index') }}"
               class="btn btn-sm btn-outline-primary">
                Kelola Berita
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th class="ps-3">No.</th>
                        <th>Judul Berita</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($beritaTerbaru as $berita)
                        <tr>
                            <td class="ps-3">{{ $loop->iteration }}</td>

                            <td class="fw-semibold">
                                {{ $berita->judul }}
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
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-secondary">
                                Belum ada berita.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection