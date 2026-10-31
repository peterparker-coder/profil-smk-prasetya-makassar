<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — SMKS Prasetya Makassar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f0f4f8;
            min-height: 100vh;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border-radius: 1rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .login-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            border-radius: 1rem 1rem 0 0;
            padding: 2rem;
            text-align: center;
        }

        .login-header .school-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .login-body {
            padding: 2rem;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="card login-card border-0">

        {{-- Header --}}
        <div class="login-header text-white">
            <div class="school-icon">
                <i class="bi bi-mortarboard-fill fs-3"></i>
            </div>
            <h4 class="fw-bold mb-1">Panel Admin</h4>
            <p class="mb-0 opacity-75 small">SMKS Prasetya Makassar</p>
        </div>

        {{-- Body --}}
        <div class="login-body">

            {{-- Pesan error global --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    {{ $errors->first() }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Pesan session (mis. dari redirect after logout) --}}
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">
                        <i class="bi bi-envelope me-1"></i> Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        placeholder="admin@smkprasetya.sch.id"
                        required
                        autofocus
                        autocomplete="email"
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">
                        <i class="bi bi-lock me-1"></i> Password
                    </label>
                    <div class="input-group">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            placeholder="Masukkan password"
                            required
                            autocomplete="current-password"
                        >
                        <button
                            type="button"
                            class="btn btn-outline-secondary"
                            id="togglePassword"
                            title="Tampilkan/sembunyikan password"
                        >
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="mb-4 form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        id="remember"
                        name="remember"
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="remember">
                        Ingat saya
                    </label>
                </div>

                {{-- Tombol Login --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg fw-semibold">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Masuk
                    </button>
                </div>
            </form>

            <hr class="my-4">

            <div class="text-center">
                <a href="{{ route('home') }}" class="text-decoration-none text-secondary small">
                    <i class="bi bi-house me-1"></i>
                    Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Toggle show/hide password
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput  = document.getElementById('password');
    const eyeIcon        = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        eyeIcon.className  = isPassword ? 'bi bi-eye-slash' : 'bi bi-eye';
    });
</script>

</body>
</html>

