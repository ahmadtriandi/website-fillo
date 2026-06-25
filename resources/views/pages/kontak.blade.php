@extends('layouts.app')

@section('title', 'Booking — Filosofi Photobooth & Videobooth')

@section('content')
<section class="fp-page-head">
    <div class="container">
        <p class="fp-mono fp-timestamp mb-2">[ BOOKING ]</p>
        <h1 class="fp-display-sm text-white mb-0">AMANKAN<br>TANGGALMU.</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row gy-5">
            <div class="col-lg-7">

                @if(session('sukses'))
                    <div class="alert alert-success border-0 rounded-0 small" role="alert">
                        <p class="fp-mono mb-2">✓ {{ session('sukses') }}</p>
                        @if(session('wa_konfirmasi'))
                            <a href="{{ session('wa_konfirmasi') }}" target="_blank" rel="noopener"
                               class="btn btn-success btn-sm rounded-0">
                                💬 Konfirmasi Langsung via WhatsApp
                            </a>
                            <p class="text-muted mt-2 mb-0" style="font-size:.75rem">
                                Klik tombol di atas agar lebih cepat diproses — detail bookingmu sudah terisi otomatis.
                            </p>
                        @endif
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger border-0 rounded-0 small" role="alert">
                        <ul class="mb-0 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('booking.store') }}" method="POST" class="fp-form">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nama" class="form-label fp-mono small">NAMA LENGKAP *</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                   id="nama" name="nama" value="{{ old('nama') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="whatsapp" class="form-label fp-mono small">NO. WHATSAPP *</label>
                            <input type="tel" class="form-control @error('whatsapp') is-invalid @enderror"
                                   id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="08xxxxxxxxxx" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fp-mono small">EMAIL (OPSIONAL)</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_acara" class="form-label fp-mono small">TANGGAL ACARA *</label>
                            <input type="date" class="form-control @error('tanggal_acara') is-invalid @enderror"
                                   id="tanggal_acara" name="tanggal_acara" value="{{ old('tanggal_acara') }}"
                                   min="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lokasi" class="form-label fp-mono small">LOKASI ACARA *</label>
                            <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                   id="lokasi" name="lokasi" value="{{ old('lokasi') }}"
                                   placeholder="Gedung / kota" required>
                        </div>
                        <div class="col-md-6">
                            <label for="paket" class="form-label fp-mono small">PAKET *</label>
                            <select class="form-select @error('paket') is-invalid @enderror" id="paket" name="paket" required>
                                <option value="" disabled {{ old('paket', request('paket')) ? '' : 'selected' }}>Pilih paket…</option>
                                @foreach($paket as $p)
                                    <option value="{{ $p['nama'] }}" {{ old('paket', request('paket')) === $p['nama'] ? 'selected' : '' }}>
                                        {{ $p['nama'] }} — {{ $p['harga'] }} / {{ $p['durasi'] }}
                                    </option>
                                @endforeach
                                <option value="Custom" {{ old('paket') === 'Custom' ? 'selected' : '' }}>Custom / belum tahu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="pesan" class="form-label fp-mono small">CERITAKAN ACARAMU (OPSIONAL)</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4"
                                      placeholder="Jenis acara, perkiraan jumlah tamu, tema…">{{ old('pesan') }}</textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-lg px-5">Kirim Permintaan Booking</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5">
                <div class="fp-card-dark p-4 p-lg-5 h-100">
                    <img src="{{ asset('assets/img/logo-wordmark-white.png') }}" alt="Filosofi" style="max-width:140px" class="mb-4">
                    <p class="fp-label mb-3">Cara kerjanya</p>
                    <ol class="text-secondary small d-grid gap-3 ps-3 mb-4">
                        <li>Kirim form ini — kami cek ketersediaan tanggal.</li>
                        <li>Tim menghubungimu via WhatsApp dalam 1x24 jam.</li>
                        <li>Bayar DP 30% untuk mengunci tanggal.</li>
                        <li>Approval desain template H-7 sebelum acara.</li>
                    </ol>
                    <p class="fp-label mb-3">Kontak langsung</p>
                    <ul class="list-unstyled small text-secondary d-grid gap-2 mb-0">
                        <li>WhatsApp: 0896-9088-8426</li>
                        <li>Email: fphotobooth22@gmail.com</li>
                        <li>Instagram: @filosofiphotobooth</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
