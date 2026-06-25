<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') — Filosofi Photobooth</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body class="fp-admin-body">

    @if(session('admin_id'))
    <nav class="navbar navbar-dark fp-navbar">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.bookings.index') }}">
                <img src="{{ asset('assets/img/logo-monogram-white.png') }}" alt="" height="28">
                <span class="fp-brand-text">FILOSOFI <span class="fp-mono fw-normal" style="font-size:.75rem;color:var(--fp-flash)">/ ADMIN</span></span>
            </a>
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <span class="fp-mono small text-secondary d-none d-md-inline">{{ session('admin_nama') }}</span>
                <a href="{{ route('admin.password') }}" class="fp-footer-link small fp-mono">Ganti Password</a>
                <a href="{{ route('home') }}" class="fp-footer-link small fp-mono" target="_blank" rel="noopener">Lihat Situs ↗</a>
                <form action="{{ route('admin.logout') }}" method="POST" class="mb-0">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @endif

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
