
@extends('layouts.public')

@section('title', 'Beranda - SMKS Prasetya Makassar')

@section('content')

{{-- HERO SECTION --}}
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0b1f44, #155eef);">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7">
                <span class="badge rounded-pill bg-light text-primary px-3 py-2 mb-3">
                    WEBSITE RESMI SEKOLAH
                </span>

                <h1 class="display-5 fw-bold mb-3">
                    Selamat Datang di SMKS Prasetya Makassar
                </h1>

                <p class="lead mb-4" style="color: #e0eaff;">
                    Mengenal lebih dekat profil sekolah, program keahlian,
                    kegiatan, dan informasi terbaru SMKS Prasetya Makassar.
                </p>

                <a href="#profil" class="btn btn-light fw-semibold me-2 mb-2 px-4 py-2">
                    Kenali Sekolah
                </a>
                <a href="#program" class="btn btn-outline-light mb-2 px-4 py-2">
                    Program Keahlian
                </a>
            </div>

            <div class="col-lg-5">
                <div class="rounded-4 p-4 p-lg-5 text-center shadow-sm"
                     style="background: rgba(255,255,255,0.12);">
                    <div class="py-3">
                        <p class="text-uppercase mb-2">Selamat Datang</p>
                        <h2 class="fw-bold">SMKS PRASETYA</h2>
                        <p class="mb-0">Makassar, Sulawesi Selatan</p>
                    </div>
                    <hr class="border-light opacity-50">
                    <p class="mb-0">
                        Pendidikan untuk membangun pengetahuan,
                        keterampilan, dan masa depan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SAMBUTAN KEPALA SEKOLAH --}}
@if ($profil?->sambutan_kepala_sekolah)
<section class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-0 rounded-3 shadow overflow-hidden">
                    <div class="card-body p-4 p-lg-5">
                        <p class="text-primary fw-bold text-uppercase mb-2">
                            Sambutan
                        </p>
                        <h2 class="fw-bold mb-4">Sambutan Kepala Sekolah</h2>

                        <p class="text-secondary mb-4"
                           style="white-space: pre-line; line-height: 1.8;">{{ $profil->sambutan_kepala_sekolah }}</p>

                        <p class="fw-bold mb-1">
                            {{ $profil->nama_kepala_sekolah ?: 'Kepala Sekolah' }}
                        </p>
                        <small class="text-secondary">
                            SMKS Prasetya Makassar
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- PROFIL SEKOLAH --}}
<section id="profil" class="py-4 py-lg-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <p class="text-primary fw-bold text-uppercase mb-2">Tentang Kami</p>
                <h2 class="fw-bold mb-3">Mengenal SMKS Prasetya Makassar</h2>

                <p class="text-secondary mb-3" style="white-space: pre-line;">{{ $profil?->sejarah ?: 'SMKS Prasetya Makassar adalah sekolah menengah kejuruan swasta yang berlokasi di Kecamatan Tamalanrea, Kota Makassar, Sulawesi Selatan.' }}</p>

                <a href="#alamat" class="btn btn-primary mt-2">
                    Lihat Lokasi Sekolah
                </a>
            </div>

            <div class="col-lg-7">
                <div class="rounded-4 p-4 p-lg-5 h-100 bg-light">
                    <h3 class="fw-bold mb-4">Identitas Sekolah</h3>

                    <div class="mb-3">
                        <p class="text-secondary mb-1">Nama Sekolah</p>
                        <h5 class="fw-semibold mb-0">SMKS Prasetya Makassar</h5>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">NPSN</p>
                            <h6 class="fw-semibold">40316697</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Bentuk Pendidikan</p>
                            <h6 class="fw-semibold">SMK</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Status Sekolah</p>
                            <h6 class="fw-semibold">Swasta</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Waktu Belajar</p>
                            <h6 class="fw-semibold">Sehari Penuh / 5 Hari</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Kepala Sekolah</p>
                            <h6 class="fw-semibold">
                                {{ $profil?->nama_kepala_sekolah ?: 'H. Abd. Razak, S. Sos., MM' }}
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-secondary mb-1">Operator</p>
                            <h6 class="fw-semibold">Rizkiani Razak</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- VISI DAN MISI --}}
<section id="visi-misi" class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Arah Pendidikan</p>
            <h2 class="fw-bold mb-2">Visi dan Misi Sekolah</h2>
            <p class="text-secondary mb-0">
                Tujuan dan komitmen SMKS Prasetya Makassar dalam pendidikan.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold text-primary mb-3">Visi</h3>
                        <p class="text-secondary mb-0" style="white-space: pre-line;">{{ $profil?->visi ?: 'Mewujudkan peserta didik yang terampil, berdaya saing tinggi, yang dilandasi pribadi yang bertakwa kepada Tuhan Yang Maha Esa.' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold text-primary mb-3">Misi</h3>
                        <p class="text-secondary mb-0" style="white-space: pre-line;">{{ $profil?->misi ?: 'Mengelola pembelajaran berbasis IT yang berorientasi pada kompetensi dan daya produksi, serta mengintegrasikan budaya lingkungan hidup.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROGRAM KEAHLIAN --}}
<section id="program" class="py-4 py-lg-5">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Pendidikan Kejuruan</p>
            <h2 class="fw-bold mb-2">Program Keahlian</h2>
            <p class="text-secondary mb-0">
                Kenali bidang keahlian dan kompetensi yang dipelajari
                di SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <p class="text-primary fw-semibold mb-2">PROGRAM 01</p>
                        <h3 class="h5 fw-bold">Informasi Jurusan</h3>
                        <p class="text-secondary mb-0">
                            Informasi nama jurusan, kompetensi, dan peluang
                            karier akan ditambahkan berdasarkan data resmi sekolah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <p class="text-primary fw-semibold mb-2">PROGRAM 02</p>
                        <h3 class="h5 fw-bold">Kompetensi Pembelajaran</h3>
                        <p class="text-secondary mb-0">
                            Penjelasan keterampilan dan materi pembelajaran
                            akan disesuaikan dengan program keahlian yang tersedia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <p class="text-primary fw-semibold mb-2">PROGRAM 03</p>
                        <h3 class="h5 fw-bold">Peluang Karier</h3>
                        <p class="text-secondary mb-0">
                            Informasi peluang kerja dan pengembangan karier
                            akan ditampilkan sesuai kompetensi setiap jurusan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BERITA DAN PENGUMUMAN --}}
<section id="berita" class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="text-center mb-4 mb-lg-5">
            <p class="text-primary fw-bold text-uppercase mb-2">Berita Sekolah</p>
            <h2 class="fw-bold mb-2">Berita dan Pengumuman</h2>
            <p class="text-secondary mb-0">
                Informasi terbaru dari SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            @forelse ($beritas as $berita)
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 rounded-3 shadow overflow-hidden bg-white">
                        @if ($berita->gambar)
                            <img
                                src="{{ asset('storage/' . $berita->gambar) }}"
                                class="card-img-top"
                                alt="{{ $berita->judul }}"
                                style="height: 220px; object-fit: cover;"
                                loading="lazy"
                            >
                        @endif

                        <div class="card-body d-flex flex-column p-3 p-lg-4">
                            <small class="text-secondary mb-2">
                                {{ $berita->tanggal_publikasi
                                    ? $berita->tanggal_publikasi->format('d F Y')
                                    : $berita->created_at->format('d F Y') }}
                            </small>

                            <h3 class="h5 card-title fw-bold mb-2">
                                {{ $berita->judul }}
                            </h3>

                            <p class="card-text text-secondary mb-3">
                                {{ $berita->ringkasan ?: \Illuminate\Support\Str::limit(strip_tags($berita->isi), 120) }}
                            </p>

                            <a
                                href="{{ route('berita.show', $berita->slug) }}"
                                class="btn btn-primary btn-sm align-self-start mt-auto"
                            >
                                Baca Selengkapnya
                            </a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <p class="text-secondary mb-0">
                            Belum ada berita atau pengumuman terbaru.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- GALERI KEGIATAN SEKOLAH --}}
<section id="galeri" class="py-4 py-lg-5">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Dokumentasi Sekolah</p>
            <h2 class="fw-bold mb-2">Galeri Kegiatan Sekolah</h2>
            <p class="text-secondary mb-0">
                Dokumentasi kegiatan dan aktivitas SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-3">
                        <div class="bg-light rounded-3 p-5 text-center mb-3">
                            <span class="text-secondary">Foto kegiatan</span>
                        </div>
                        <h3 class="h5 fw-bold">Kegiatan Pembelajaran</h3>
                        <p class="text-secondary mb-0">
                            Dokumentasi proses pembelajaran di lingkungan sekolah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-3">
                        <div class="bg-light rounded-3 p-5 text-center mb-3">
                            <span class="text-secondary">Foto kegiatan</span>
                        </div>
                        <h3 class="h5 fw-bold">Kegiatan Siswa</h3>
                        <p class="text-secondary mb-0">
                            Dokumentasi aktivitas dan kegiatan peserta didik.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-3">
                        <div class="bg-light rounded-3 p-5 text-center mb-3">
                            <span class="text-secondary">Foto kegiatan</span>
                        </div>
                        <h3 class="h5 fw-bold">Lingkungan Sekolah</h3>
                        <p class="text-secondary mb-0">
                            Dokumentasi lingkungan dan fasilitas sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- LEGALITAS SEKOLAH --}}
<section id="legalitas" class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Legalitas</p>
            <h2 class="fw-bold mb-2">Legalitas Sekolah</h2>
            <p class="text-secondary mb-0">
                Informasi legalitas SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">SK Pendirian</p>
                        <h3 class="h4 fw-bold">Nomor 98</h3>
                        <p class="text-secondary mb-0">
                            Tanggal pada sumber data: 1 Januari 1900
                            (perlu verifikasi).
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">SK Operasional</p>
                        <h3 class="h4 fw-bold">800/0218/DP/I/2009</h3>
                        <p class="text-secondary mb-0">
                            Tanggal pada sumber data: 1 Januari 1900
                            (perlu verifikasi).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-secondary mb-2">Sumber Referensi</p>
            <a href="https://referensi.data.kemendikdasmen.go.id/pendidikan/npsn/40316697"
               target="_blank" rel="noopener noreferrer"
               class="btn btn-outline-primary btn-sm me-2 mb-2">
                Kemendikdasmen
            </a>
            <a href="https://ban-pdm.id/satuanpendidikan/40316697"
               target="_blank" rel="noopener noreferrer"
               class="btn btn-outline-primary btn-sm mb-2">
                BAN-PDM
            </a>
        </div>
    </div>
</section>

{{-- FASILITAS SEKOLAH --}}
<section id="fasilitas" class="py-4 py-lg-5">
    <div class="container">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Sarana dan Prasarana</p>
            <h2 class="fw-bold mb-2">Fasilitas Sekolah</h2>
            <p class="text-secondary mb-0">
                Informasi fasilitas dan dukungan sarana sekolah.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Luas Tanah</h3>
                        <p class="text-secondary mb-1">Status kepemilikan</p>
                        <h4 class="text-primary fw-bold">300 m²</h4>
                        <p class="text-secondary mb-0">
                            Tanah milik sekolah, sesuai informasi yang tersedia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Listrik</h3>
                        <p class="text-secondary mb-1">Sumber listrik</p>
                        <h4 class="text-primary fw-bold">PLN</h4>
                        <p class="text-secondary mb-0">
                            Daya listrik tercatat sebesar 1.300 Watt.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold">Akses Internet</h3>
                        <p class="text-secondary mb-1">Informasi konektivitas</p>
                        <h4 class="text-primary fw-bold">Perlu Verifikasi</h4>
                        <p class="text-secondary mb-0">
                            Data sumber mencantumkan akses internet tidak ada
                            dan keterangan 50 Mb. Statusnya perlu dikonfirmasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- KONTAK --}}
<section id="kontak" class="py-4 py-lg-5 text-white" style="background-color: #0b1f44;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Informasi dan Kontak Sekolah</h2>
                <p class="mb-3 text-white-50">
                    Hubungi SMKS Prasetya Makassar melalui informasi berikut.
                </p>
                <p class="mb-2">
                    Telepon:
                    <a href="tel:04114770832" class="text-white">0411-4770832</a>
                </p>
                <p class="mb-0">
                    Email:
                    <a href="mailto:smkprasetya.makassar@yahoo.co.id" class="text-white">
                        smkprasetya.makassar@yahoo.co.id
                    </a>
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <a href="#alamat" class="btn btn-light fw-semibold me-2 mb-2">
                    Lihat Alamat
                </a>
                <a href="#profil" class="btn btn-outline-light mb-2">
                    Kembali ke Atas
                </a>
            </div>
        </div>
    </div>
</section>

{{-- LOKASI SEKOLAH --}}
<section id="alamat" class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Lokasi Sekolah</p>
            <h2 class="fw-bold mb-2">Temukan Lokasi Kami</h2>
            <p class="text-secondary mb-0">
                Jl. Buntusu NHP / BTP No. 17, Kecamatan Tamalanrea,
                Kota Makassar, Sulawesi Selatan 90245.
            </p>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body p-4">
                        <h3 class="h5 fw-bold mb-3">SMKS Prasetya Makassar</h3>

                        <p class="text-secondary">
                            Jl. Buntusu NHP / BTP No. 17,
                            Kecamatan Tamalanrea, Makassar,
                            Sulawesi Selatan 90245.
                        </p>

                        <hr>

                        <p class="mb-1 fw-semibold">Telepon</p>
                        <p>
                            <a href="tel:04114770832" class="text-decoration-none">
                                0411-4770832
                            </a>
                        </p>

                        <p class="mb-1 fw-semibold">Email</p>
                        <p class="text-break">
                            <a href="mailto:smkprasetya.makassar@yahoo.co.id"
                               class="text-decoration-none">
                                smkprasetya.makassar@yahoo.co.id
                            </a>
                        </p>

                        <a href="https://www.google.com/maps?q=-5.141059863967183,119.51582476950814"
                           target="_blank" rel="noopener noreferrer"
                           class="btn btn-primary w-100 mt-2">
                            Buka Petunjuk Lokasi
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="rounded-3 overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.4419253919357!2d119.51582476950814!3d-5.141059863967183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee4abf566c9a7%3A0x9749c2594ac4e215!2sSMP-SMK%20PRASETYA%20MAKASSAR!5e0!3m2!1sid!2sid!4v1792247242605!5m2!1sid!2sid"
                        width="100%"
                        height="430"
                        style="border: 0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"
                        title="Peta lokasi SMKS Prasetya Makassar">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
