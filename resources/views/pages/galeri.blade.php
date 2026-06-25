@extends('layouts.app')

@section('title', 'Galeri — Filosofi Photobooth & Videobooth')

@section('content')
<section class="fp-page-head">
    <div class="container">
        <p class="fp-mono fp-timestamp mb-2">[ GALERI ]</p>
        <h1 class="fp-display-sm text-white mb-0">HASIL DARI<br>ACARA SEBELUMNYA.</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-lg-4">
        {{-- <p class="text-muted small fp-mono mb-4">* Edit daftar foto di method galeriData() pada app/Http/Controllers/PageController.php — file foto ditaruh di public/assets/img/galeri/</p> --}}
        <div class="row g-4">
            @foreach($galeri as $item)
            <div class="col-6 col-lg-4">
                @include('partials.galeri-item', ['item' => $item])
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 fp-section-dark text-center">
    <div class="container py-lg-4">
        <h2 class="fp-heading text-white mb-3">Acaramu berikutnya?</h2>
        <a href="{{ route('kontak') }}" class="btn btn-flash btn-lg px-5">Booking Sekarang</a>
    </div>
</section>
@endsection
