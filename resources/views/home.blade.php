@extends('layouts.public')

@section('title', 'Beranda - SMKS Prasetya Makassar')

@section('content')

{{-- HERO SECTION --}}
<section class="py-5" style="background: linear-gradient(135deg, #0b1f44, #155eef); color: white;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge rounded-pill bg-light text-primary px-3 py-2 mb-3">
                    WEBSITE RESMI SEKOLAH
                </span>

                <h1 class="display-4 fw-bold mb-4">
                    Selamat Datang di SMKS Prasetya Makassar
                </h1>

                <p class="lead mb-4" style="color: #e0eaff;">
                    Mengenal lebih dekat profil sekolah, program keahlian,
                    kegiatan, dan informasi terbaru SMKS Prasetya Makassar.
                </p>

                <a href="#profil" class="btn btn-light btn-lg fw-semibold me-2 mb-2">
                    Kenali Sekolah
                </a>

                <a href="#program" class="btn btn-outline-light btn-lg mb-2">
                    Program Keahlian
                </a>
            </div>

            <div class="col-lg-5">
                <div class="p-4 p-md-5 rounded-4 text-center"
                     style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25);">
                    <div class="py-4">
                        <p class="text-uppercase mb-2" style="letter-spacing: 3px;">
                            Selamat Datang
                        </p>
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

{{-- PROFIL SEKOLAH --}}
<section id="profil" class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <p class="text-primary fw-bold text-uppercase mb-2">
                    Tentang Kami
                </p>

                <h2 class="fw-bold mb-3">
                    Mengenal SMKS Prasetya Makassar
                </h2>

                <p class="text-secondary">
                    SMKS Prasetya Makassar adalah sekolah menengah kejuruan
                    swasta yang berlokasi di Kecamatan Tamalanrea,
                    Kota Makassar, Sulawesi Selatan.
                </p>

                <a href="#alamat" class="btn btn-primary mt-2">
                    Lihat Lokasi Sekolah
                </a>
            </div>

            <div class="col-lg-7">
                <div class="rounded-4 p-4 p-md-5 h-100" style="background-color: #f0f5ff;">
                    <h3 class="fw-bold mb-4">Identitas Sekolah</h3>

                    <div class="mb-3">
                        <p class="text-secondary mb-1">Nama Sekolah</p>
                        <h5 class="fw-semibold">SMKS Prasetya Makassar</h5>
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
                            <h6 class="fw-semibold">H. Abd. Razak, S. Sos., MM</h6>
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
<section id="visi-misi" class="py-5" style="background-color: #f5f7fb;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase mb-2">Arah Pendidikan</p>
            <h2 class="fw-bold">Visi dan Misi Sekolah</h2>
            <p class="text-secondary">
                Tujuan dan komitmen SMKS Prasetya Makassar dalam pendidikan.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-primary mb-3">Visi</h3>
                        <p class="text-secondary mb-0">
                            Mewujudkan peserta didik yang terampil,
                            berdaya saing tinggi, yang dilandasi pribadi
                            yang bertakwa kepada Tuhan Yang Maha Esa.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="fw-bold text-primary mb-3">Misi</h3>
                        <p class="text-secondary mb-0">
                            Mengelola pembelajaran berbasis IT yang
                            berorientasi pada kompetensi dan daya produksi,
                            serta mengintegrasikan budaya lingkungan hidup.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PROGRAM KEAHLIAN --}}
<section id="program" class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase mb-2">Pendidikan Kejuruan</p>
            <h2 class="fw-bold">Program Keahlian</h2>
            <p class="text-secondary">
                Kenali bidang keahlian dan kompetensi yang dipelajari
                di SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <p class="text-primary fw-semibold mb-2">PROGRAM 01</p>
                    <h5 class="fw-bold">Informasi Jurusan</h5>
                    <p class="text-secondary mb-0">
                        Informasi nama jurusan, kompetensi, dan peluang
                        karier akan ditambahkan berdasarkan data resmi sekolah.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <p class="text-primary fw-semibold mb-2">PROGRAM 02</p>
                    <h5 class="fw-bold">Kompetensi Pembelajaran</h5>
                    <p class="text-secondary mb-0">
                        Penjelasan keterampilan dan materi pembelajaran
                        akan disesuaikan dengan program keahlian yang tersedia.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <p class="text-primary fw-semibold mb-2">PROGRAM 03</p>
                    <h5 class="fw-bold">Peluang Karier</h5>
                    <p class="text-secondary mb-0">
                        Informasi peluang kerja dan pengembangan karier
                        akan ditampilkan sesuai kompetensi setiap jurusan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BERITA DAN PENGUMUMAN --}}
<section id="berita" class="py-5 bg-light">
    <div class="container py-4">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase mb-2">Informasi Sekolah</p>
            <h2 class="fw-bold">Berita dan Pengumuman</h2>
            <p class="text-secondary">
                Informasi terbaru mengenai kegiatan dan pengumuman
                SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <span class="badge text-bg-primary mb-3">Pengumuman</span>
                        <h5 class="fw-bold">Penerimaan Peserta Didik Baru</h5>
                        <p class="text-secondary mb-0">
                            Informasi jadwal dan persyaratan pendaftaran
                            akan ditampilkan setelah data resmi tersedia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <span class="badge text-bg-success mb-3">Kegiatan</span>
                        <h5 class="fw-bold">Kegiatan Sekolah</h5>
                        <p class="text-secondary mb-0">
                            Informasi kegiatan dan aktivitas sekolah
                            akan ditampilkan berdasarkan dokumentasi resmi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <span class="badge text-bg-secondary mb-3">Akademik</span>
                        <h5 class="fw-bold">Informasi Akademik</h5>
                        <p class="text-secondary mb-0">
                            Informasi akademik dan pemberitahuan penting
                            bagi peserta didik akan tersedia di bagian ini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- GALERI KEGIATAN SEKOLAH --}}
<section id="galeri" class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase mb-2">Dokumentasi Sekolah</p>
            <h2 class="fw-bold">Galeri Kegiatan Sekolah</h2>
            <p class="text-secondary">
                Dokumentasi kegiatan dan aktivitas SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <div class="bg-light rounded-3 p-5 text-center mb-3">
                        <span class="text-secondary">Foto kegiatan</span>
                    </div>
                    <h5 class="fw-bold">Kegiatan Pembelajaran</h5>
                    <p class="text-secondary mb-0">
                        Dokumentasi proses pembelajaran di lingkungan sekolah.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <div class="bg-light rounded-3 p-5 text-center mb-3">
                        <span class="text-secondary">Foto kegiatan</span>
                    </div>
                    <h5 class="fw-bold">Kegiatan Siswa</h5>
                    <p class="text-secondary mb-0">
                        Dokumentasi aktivitas dan kegiatan peserta didik.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="border rounded-4 p-4 h-100">
                    <div class="bg-light rounded-3 p-5 text-center mb-3">
                        <span class="text-secondary">Foto kegiatan</span>
                    </div>
                    <h5 class="fw-bold">Lingkungan Sekolah</h5>
                    <p class="text-secondary mb-0">
                        Dokumentasi lingkungan dan fasilitas sekolah.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- LEGALITAS SEKOLAH --}}
<section id="legalitas" class="py-5" style="background-color: #f5f7fb;">
    <div class="container py-4">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Legalitas</p>
            <h2 class="fw-bold">Legalitas Sekolah</h2>
            <p class="text-secondary">
                Informasi legalitas SMKS Prasetya Makassar.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">SK Pendirian</p>
                        <h4 class="fw-bold">Nomor 98</h4>
                        <p class="mb-0 text-secondary">
                            Tanggal pada sumber data: 1 Januari 1900
                            (perlu verifikasi).
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <p class="text-secondary mb-2">SK Operasional</p>
                        <h4 class="fw-bold">800/0218/DP/I/2009</h4>
                        <p class="mb-0 text-secondary">
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
<section id="fasilitas" class="py-5">
    <div class="container py-4">
        <div class="text-center mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Sarana dan Prasarana</p>
            <h2 class="fw-bold">Fasilitas Sekolah</h2>
            <p class="text-secondary">
                Informasi fasilitas dan dukungan sarana sekolah.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="border rounded-4 p-4 h-100">
                    <h5 class="fw-bold">Luas Tanah</h5>
                    <p class="text-secondary mb-1">Status kepemilikan</p>
                    <h4 class="text-primary fw-bold">300 m²</h4>
                    <p class="text-secondary mb-0">
                        Tanah milik sekolah, sesuai informasi yang tersedia.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="border rounded-4 p-4 h-100">
                    <h5 class="fw-bold">Listrik</h5>
                    <p class="text-secondary mb-1">Sumber listrik</p>
                    <h4 class="text-primary fw-bold">PLN</h4>
                    <p class="text-secondary mb-0">
                        Daya listrik tercatat sebesar 1.300 Watt.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="border rounded-4 p-4 h-100">
                    <h5 class="fw-bold">Akses Internet</h5>
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
</section>

{{-- KONTAK --}}
<section id="kontak" class="py-5 text-white" style="background-color: #0b1f44;">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Informasi dan Kontak Sekolah</h2>
                <p class="mb-2" style="color: #d6e2ff;">
                    Hubungi SMKS Prasetya Makassar melalui informasi berikut.
                </p>
                <p class="mb-1">
                    Telepon: <a href="tel:04114770832" class="text-white">0411-4770832</a>
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
<section id="alamat" class="py-5 bg-light">
    <div class="container py-4">
        <div class=" mb-4">
            <p class="text-primary fw-bold text-uppercase mb-2">Lokasi Sekolah</p>
            <h2 class="fw-bold">Temukan Lokasi Kami</h2>
            <p class="text-secondary">
                Jl. Buntusu NHP / BTP No. 17, Kecamatan Tamalanrea,
                Kota Makassar, Sulawesi Selatan 90245.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-3">SMKS Prasetya Makassar</h5>

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

            <div class="col-lg-8">
                <div class="rounded-4 overflow-hidden shadow-sm">
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