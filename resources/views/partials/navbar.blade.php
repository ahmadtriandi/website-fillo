<nav class="navbar navbar-expand-lg navbar-dark fixed-top fp-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo-monogram-white.png') }}" alt="Logo Filosofi" height="36">
            <span class="fp-brand-text">FILOSOFI</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navUtama"
                aria-controls="navUtama" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navUtama">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                {{-- <li class="nav-item"><a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a></li> --}}
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('paket') ? 'active' : '' }}" href="{{ route('paket') }}">Paket</a></li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-flash btn-sm px-3" href="{{ route('kontak') }}">Booking Sekarang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
