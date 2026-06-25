<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Filosofi Photobooth & Videobooth — sewa photobooth dan videobooth untuk wedding, ulang tahun, dan event korporat di Jabodetabek.">
    <title>@yield('title', 'Filosofi Photobooth & Videobooth')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font: Archivo Black (display), Archivo (body), Space Mono (label/timestamp) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:wght@400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
