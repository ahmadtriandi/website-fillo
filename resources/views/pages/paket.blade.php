@extends('layouts.app')

@section('title', 'Paket & Harga — Filosofi Photobooth & Videobooth')

@section('content')
<section class="fp-page-head">
    <div class="container">
        <p class="fp-mono fp-timestamp mb-2">[ PAKET & HARGA ]</p>
        <h1 class="fp-display-sm text-white mb-0">HARGA JELAS.<br>TANPA BIAYA SILUMAN.</h1>
    </div>
</section>

<section class="py-5 fp-section-dark">
    <div class="container py-lg-4">
        <div class="row gy-4">
            @foreach($paket as $p)
            <div class="col-lg-4">
                <div class="fp-price-card h-100 p-4 {{ $p['populer'] ? 'fp-price-populer' : '' }}">
                    @if($p['populer'])
                        <span class="badge fp-badge mb-3">PALING LAKU</span>
                    @endif
                    <h2 class="h4 fw-bold">{{ $p['nama'] }}</h2>
                    <p class="fp-mono mb-1">{{ $p['durasi'] }}</p>
                    <p class="fp-price mb-4">{{ $p['harga'] }}</p>
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

        <div class="fp-card-dark mt-5 p-4 p-lg-5">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-8">
                    <h2 class="h4 fw-bold text-white mb-2">Butuh yang berbeda?</h2>
                    <p class="text-secondary small mb-0">Tambahan jam, lokasi luar Jabodetabek, atau gabungan
                    photobooth + videobooth dengan kebutuhan khusus — semua bisa diatur. Harga di atas
                    sudah termasuk kru, alat, dan bahan cetak; transport luar kota dihitung terpisah.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('kontak') }}" class="btn btn-flash px-4">Minta Penawaran Custom</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
