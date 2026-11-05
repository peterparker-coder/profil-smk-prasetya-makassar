<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin') — SMKS Prasetya Makassar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: linear-gradient(180deg, #0d47a1 0%, #1565c0 100%);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding-top: 0;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 1.25rem 1rem;
            border-bottom: 1px solid rgba(255,255,255,0.15);
        }

        .sidebar-nav .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.65rem 1.25rem;
            border-radius: 0.375rem;
            margin: 0.15rem 0.75rem;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .sidebar-nav .nav-link:hover,
        .sidebar-nav .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .sidebar-nav .nav-link i {
            width: 20px;
            margin-right: 0.5rem;
        }

        /* Main content */
        .main-content {
            margin-left: 240px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Top navbar */
        .topbar {
            background: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: 0.75rem 1.5rem;
            position: sticky;
            top: 0;
            z-index: 99;
        }

        .page-content {
            flex: 1;
            padding: 1.5rem;
        }

        /* Responsive sidebar */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.4);
                z-index: 99;
            }

            .sidebar-overlay.show {
                display: block;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

{{-- Sidebar Overlay (Mobile) --}}
<div class="sidebar-overlay" id="sidebarOverlay"></div>

{{-- Sidebar --}}
<nav class="sidebar" id="sidebar">

    {{-- Brand --}}
    <div class="sidebar-brand text-white">
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-mortarboard-fill fs-5"></i>
            <div>
                <div class="fw-bold lh-1" style="font-size: 0.85rem;">SMKS Prasetya</div>
                <div class="opacity-75" style="font-size: 0.7rem;">Panel Administrasi</div>
            </div>
        </div>
    </div>

    {{-- Navigasi --}}
    <ul class="nav flex-column sidebar-nav mt-2">

        <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
       href="{{ route('admin.dashboard') }}">
        <i class="bi bi-speedometer2"></i>
        Dashboard
    </a>
</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}"
               href="{{ route('admin.berita.index') }}">
                <i class="bi bi-newspaper"></i>
                Berita
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.profil-sekolah.*') ? 'active' : '' }}"
               href="{{ route('admin.profil-sekolah.edit') }}">
                <i class="bi bi-building"></i>
                Profil Sekolah
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.tenaga-pendidik.*') ? 'active' : '' }}"
            href="{{ route('admin.tenaga-pendidik.index') }}">
                <i class="bi bi-people"></i>
                Data Guru & Tendik
            </a>
        </li>

        <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.siswa.*') ? 'active' : '' }}"
       href="{{ route('admin.siswa.index') }}">
        <i class="bi bi-mortarboard"></i>
        Data Siswa
    </a>
</li>

        <li class="mt-3" style="padding: 0 0.75rem;">
            <hr class="border-white opacity-25 my-1">
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}" target="_blank">
                <i class="bi bi-globe"></i>
                Lihat Website
            </a>
        </li>

    </ul>
</nav>

{{-- Main Content --}}
<div class="main-content">

    {{-- Top Bar --}}
    <div class="topbar d-flex align-items-center justify-content-between">
        {{-- Tombol toggle sidebar (mobile) --}}
        <button class="btn btn-sm btn-outline-secondary d-md-none"
                id="sidebarToggle" type="button">
            <i class="bi bi-list fs-5"></i>
        </button>

        {{-- Breadcrumb / judul halaman --}}
        <div class="d-none d-md-block text-secondary small">
            @yield('breadcrumb', 'Dashboard')
        </div>

        {{-- User dropdown --}}
        <div class="ms-auto dropdown">
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-2"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                <i class="bi bi-person-circle fs-5"></i>
                <span class="d-none d-sm-inline">{{ Auth::guard('admin')->user()->name }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li>
                    <span class="dropdown-item-text small text-secondary">
                        {{ Auth::guard('admin')->user()->email }}
                    </span>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Keluar
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    {{-- Page Content --}}
    <div class="page-content">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="text-center text-secondary py-3 border-top small">
        &copy; {{ date('Y') }} SMKS Prasetya Makassar — Panel Admin
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle sidebar pada mobile
    const sidebar        = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const sidebarToggle  = document.getElementById('sidebarToggle');

    sidebarToggle?.addEventListener('click', function () {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('show');
    });

    sidebarOverlay.addEventListener('click', function () {
        sidebar.classList.remove('show');
        sidebarOverlay.classList.remove('show');
    });
</script>

@stack('scripts')

</body>
</html>

