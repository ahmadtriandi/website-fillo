@extends('layouts.app')

@section('title', 'Filosofi Photobooth & Videobooth — Sewa Photobooth Jabodetabek')

@section('content')

{{-- ============ HERO ============ --}}
<section class="fp-hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-8 col-lg-7">
                <p class="fp-mono fp-timestamp mb-4">[ FILOSOFI — SEJAK 2021 — JAKARTA, ID ]</p>
                <h1 class="fp-display mb-4">
                    MOMEN ITU<br>
                    SEBENTAR.<br>
                    <span class="fp-outline">KENANGANNYA</span><br>
                    SELAMANYA.
                </h1>
                <p class="lead text-secondary mb-4 pe-lg-5">
                    Photobooth &amp; videobooth untuk wedding, ulang tahun, dan event
                    korporat. Tamu berpose, kami yang urus sisanya — cetakan langsung
                    jadi dalam hitungan detik.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('kontak') }}" class="btn btn-flash btn-lg px-4">Cek Tanggal Kamu</a>
                    <a href="{{ route('paket') }}" class="btn btn-outline-light btn-lg px-4">Lihat Paket</a>
                </div>
            </div>
            <div class="col-4 col-lg-5 d-flex justify-content-center">
                {{-- Elemen signature: strip foto vertikal --}}
                <div class="fp-strip" aria-hidden="true">
                    <div class="fp-strip-frame"><span class="fp-count">3</span></div>
                    <div class="fp-strip-frame"><span class="fp-count">2</span></div>
                    <div class="fp-strip-frame"><span class="fp-count">1</span></div>
                    <div class="fp-strip-frame fp-strip-flash">
                        <img src="{{ asset('assets/img/logo-monogram-black.png') }}" alt="" height="64">
                    </div>
                    <p class="fp-mono fp-strip-caption mb-0">FILOSOFI &middot; {{ date('d.m.Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ KENAPA FILOSOFI ============ --}}
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <p class="fp-mono fp-timestamp-dark mb-2">[ KENAPA FILOSOFI ]</p>
        <h2 class="fp-heading mb-5">Bukan sekadar photobooth biasa.</h2>
        <div class="row gy-4">
            <div class="col-md-4">
                <div class="fp-card h-100 p-4">
                    <p class="fp-mono small mb-2">CETAK &lt; 10 DETIK</p>
                    <h3 class="h5 fw-bold mb-2">Hasil instan</h3>
                    <p class="text-muted small mb-0">Printer dye-sub profesional. Tamu pose, foto langsung tercetak — tidak ada antrean menumpuk.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fp-card h-100 p-4">
                    <p class="fp-mono small mb-2">DESAIN CUSTOM</p>
                    <h3 class="h5 fw-bold mb-2">Template sesuai acaramu</h3>
                    <p class="text-muted small mb-0">Nama, tanggal, dan tema acara dirancang ke dalam template strip. Gratis revisi sampai cocok.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fp-card h-100 p-4">
                    <p class="fp-mono small mb-2">VIDEOBOOTH</p>
                    <h3 class="h5 fw-bold mb-2">Videobooth 360&deg;</h3>
                    <p class="text-muted small mb-0">Video 360&deg; siap dibagikan ke Instagram lewat QR code, langsung di lokasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ PAKET RINGKAS ============ --}}
<section class="py-5 fp-section-dark">
    <div class="container py-lg-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-5 gap-3">
            <div>
                <p class="fp-mono fp-timestamp mb-2">[ PAKET ]</p>
                <h2 class="fp-heading text-white mb-0">Pilih sesuai skala acara.</h2>
            </div>
            <a href="{{ route('paket') }}" class="btn btn-outline-light">Detail Semua Paket</a>
        </div>
        <div class="row gy-4">
            @foreach(array_slice($paket, 0, 3) as $p)
            <div class="col-lg-4">
                <div class="fp-price-card h-100 p-4 {{ $p['populer'] ? 'fp-price-populer' : '' }}">
                    @if($p['populer'])
                        <span class="badge fp-badge mb-3">PALING LAKU</span>
                    @endif
                    <h3 class="h4 fw-bold">{{ $p['nama'] }}</h3>
                    <p class="fp-mono mb-1">{{ $p['durasi'] }}</p>
                    <ul class="list-unstyled d-grid gap-2 small mb-4">
                        @foreach($p['fitur'] as $f)
                            <li>— {{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('kontak') }}?paket={{ urlencode($p['nama']) }}" class="btn {{ $p['populer'] ? 'btn-flash' : 'btn-outline-light' }} w-100">Pilih Paket Ini</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ KLIEN KAMI ============ --}}
@php
    // Daftar logo klien — file ada di public/assets/img/clients/
    // Cukup tambah/hapus baris di sini, marquee otomatis menyesuaikan.
    $klien = [
        ['btn.png',        'BTN'],
        ['cocacola.png',   'Coca-Cola'],
        ['danamon.png',    'Bank Danamon'],
        ['hkti.png',       'HKTI'],
        ['C.png',          'IBS Group'],
        ['idn-times.png',  'IDN Times'],
        ['indofood.png',   'Indofood'],
        ['jasjus.png',     'JasJus'],
        ['bri.png',        'Bank BRI'],
        ['loreal.png',     "L'Oréal"],
        ['mandiri.png',    'Bank Mandiri'],
        ['nsk.png',        'NSK'],
        ['pln.png',        'PLN'],
        ['royalcanin.png', 'Royal Canin'],
        ['royco.png',      'Royco'],
        ['sinarmas.png',   'Sinarmas'],
        ['unilever.png',   'Unilever'],
        ['waskita.png',    'Waskita'],
    ];
@endphp
<section class="py-5 bg-white fp-clients-section">
    <div class="container py-lg-2">
        <h2 class="fp-heading mb-5 text-center">[ DIPERCAYA OLEH ]</h2>
    </div>
    <div class="fp-clients-wrap" aria-label="Klien kami">
        <div class="fp-clients-track">
            {{-- Track dirender dua kali agar loop marquee mulus tanpa terputus --}}
            @for($set = 0; $set < 2; $set++)
                @foreach($klien as [$file, $alt])
                    <img src="{{ asset('assets/img/clients/' . $file) }}"
                         alt="{{ $set === 0 ? $alt : '' }}"
                         @if($set === 1) aria-hidden="true" @endif
                         loading="lazy">
                @endforeach
            @endfor
        </div>
    </div>
</section>

{{-- ============ GALERI RINGKAS ============ --}}
<section class="py-5 bg-black fp-clients-section">
    <div class="container py-lg-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-5 gap-3">
            <div>
                <p class="fp-mono fp-timestamp-light text-white mb-2">[ GALERI ]</p>
                <h2 class="fp-heading  text-white mb-0">Hasil dari acara sebelumnya.</h2>
            </div>
            <a href="{{ route('galeri') }}" class="btn btn-outline-light rounded-0">Lihat Semua Galeri</a>
        </div>
        <div class="row g-3">
            {{-- @foreach($galeri as $item) --}}
            @foreach(array_slice($galeri, 0, 8) as $item)
            <div class="col-6 col-md-3">
                @include('partials.galeri-item', ['item' => $item])
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ============ CTA ============ --}}
<section class="py-5 bg-white">
    <div class="container py-lg-5 text-center">
        <img src="{{ asset('assets/img/logo-monogram-black.png') }}" alt="" class="fp-cta-logo mb-4">
        <h2 class="fp-heading mb-3">Tanggal acara populer cepat penuh.</h2>
        <p class="text-muted mb-4">Cek ketersediaan tanggalmu sekarang — tanpa biaya, tanpa komitmen.</p>
        <a href="{{ route('kontak') }}" class="btn btn-dark btn-lg px-5">Booking Sekarang</a>
    </div>
</section>

@endsection
