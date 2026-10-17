@extends('layouts.public')

@section('title', $berita->judul . ' - SMKS Prasetya Makassar')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-3" style="max-width: 900px;">

        <a href="{{ url('/#berita') }}"
           class="btn btn-outline-primary mb-4">
            &larr; Kembali ke Berita
        </a>

        <article class="card border-0 shadow-sm rounded-4 overflow-hidden">
            @if ($berita->gambar)
                <img
                    src="{{ asset('storage/' . $berita->gambar) }}"
                    alt="{{ $berita->judul }}"
                    class="card-img-top"
                    style="max-height: 450px; object-fit: cover;"
                >
            @endif

            <div class="card-body p-4 p-md-5">
                <p class="text-secondary small mb-2">
                    {{ $berita->tanggal_publikasi
                        ? $berita->tanggal_publikasi->format('d F Y')
                        : $berita->created_at->format('d F Y') }}
                </p>

                <h1 class="fw-bold mb-4">{{ $berita->judul }}</h1>

                @if ($berita->ringkasan)
                    <p class="lead text-secondary mb-4">
                        {{ $berita->ringkasan }}
                    </p>
                @endif

                <hr class="mb-4">

                <div class="text-dark" style="white-space: pre-line; line-height: 1.8;">
                    {{ $berita->isi }}
                </div>
            </div>
        </article>

    </div>
</section>
@endsection