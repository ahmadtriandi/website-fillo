@extends('layouts.app')

@section('title', 'Layanan — Filosofi Photobooth & Videobooth')

@section('content')
<section class="fp-page-head">
    <div class="container">
        <p class="fp-mono fp-timestamp mb-2">[ LAYANAN ]</p>
        <h1 class="fp-display-sm text-white mb-0">APA YANG KAMI BAWA<br>KE ACARAMU.</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="fp-card p-4 p-lg-5 h-100">
                    <p class="fp-mono small mb-3">01 / PHOTOBOOTH KLASIK</p>
                    <h2 class="h3 fw-bold mb-3">Photobooth Strip</h2>
                    <p class="text-muted">Booth foto dengan kamera DSLR, lighting studio, dan printer dye-sub.
                    Tamu berpose 3–4 kali, strip 2x6 atau 4R langsung tercetak dengan template
                    bertema acaramu.</p>
                    <ul class="list-unstyled d-grid gap-2 small text-muted mb-0">
                        <li>— Unlimited sesi selama durasi sewa</li>
                        <li>— Properti foto (kacamata, topi, papan kutipan)</li>
                        <li>— Kru operator yang memandu tamu</li>
                        <li>— Soft file semua foto via Google Drive</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fp-card p-4 p-lg-5 h-100">
                    <p class="fp-mono small mb-3">02 / VIDEOBOOTH</p>
                    <h2 class="h3 fw-bold mb-3">Videobooth 180&deg;</h2>
                    <p class="text-muted">Rangkaian kamera yang merekam momen dari banyak sudut sekaligus.
                    Hasilnya video boomerang dan slow motion sinematik yang siap diunggah
                    ke media sosial.</p>
                    <ul class="list-unstyled d-grid gap-2 small text-muted mb-0">
                        <li>— Efek boomerang, slow motion, dan freeze</li>
                        <li>— Sharing instan lewat QR code di lokasi</li>
                        <li>— Overlay nama &amp; tanggal acara di video</li>
                        <li>— Cocok untuk wedding dan launching produk</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fp-card p-4 p-lg-5 h-100">
                    <p class="fp-mono small mb-3">03 / GUEST BOOK</p>
                    <h2 class="h3 fw-bold mb-3">Guest Book Strip</h2>
                    <p class="text-muted">Setiap tamu menempelkan satu strip fotonya ke buku tamu dan menulis
                    pesan di sampingnya. Di akhir acara, kamu pulang membawa album kenangan
                    yang sudah jadi.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fp-card p-4 p-lg-5 h-100">
                    <p class="fp-mono small mb-3">04 / KUSTOMISASI</p>
                    <h2 class="h3 fw-bold mb-3">Backdrop &amp; Template Custom</h2>
                    <p class="text-muted">Backdrop premium (kain, bunga, atau neon sign) dan template strip
                    dirancang mengikuti tema serta palet warna acaramu. Desain dikirim
                    untuk approval sebelum hari H.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 fp-section-dark text-center">
    <div class="container py-lg-4">
        <h2 class="fp-heading text-white mb-3">Masih bingung pilih yang mana?</h2>
        <p class="text-secondary mb-4">Ceritakan acaramu, kami bantu rekomendasikan setup yang pas.</p>
        <a href="{{ route('kontak') }}" class="btn btn-flash btn-lg px-5">Konsultasi Gratis</a>
    </div>
</section>
@endsection
