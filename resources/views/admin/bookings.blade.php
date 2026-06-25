@extends('layouts.admin')

@section('title', 'Data Booking')

@section('content')
<div class="container-fluid px-3 px-lg-4">

    <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
        <div>
            <p class="fp-mono small text-muted mb-1">[ DASHBOARD ]</p>
            <h1 class="fp-heading mb-0">Data Booking</h1>
        </div>
        <form method="GET" action="{{ route('admin.bookings.index') }}" class="d-flex gap-2">
            @if($filter)<input type="hidden" name="status" value="{{ $filter }}">@endif
            <input type="search" name="q" value="{{ request('q') }}" class="form-control rounded-0"
                   placeholder="Cari nama / WA / lokasi…" style="min-width:230px">
            <button class="btn btn-dark">Cari</button>
        </form>
    </div>

    @if(session('sukses'))
        <div class="alert alert-success rounded-0 small py-2">✓ {{ session('sukses') }}</div>
    @endif

    {{-- Statistik + filter status --}}
    <div class="row g-3 mb-4">
        <div class="col-6 col-md">
            <a href="{{ route('admin.bookings.index') }}" class="fp-stat {{ !$filter ? 'aktif' : '' }}">
                <div class="angka">{{ $statistik['total'] }}</div>
                <div class="label">Semua</div>
            </a>
        </div>
        @foreach(['baru', 'dihubungi', 'deal', 'batal'] as $s)
        <div class="col-6 col-md">
            <a href="{{ route('admin.bookings.index', ['status' => $s]) }}" class="fp-stat {{ $filter === $s ? 'aktif' : '' }}">
                <div class="angka">{{ $statistik[$s] }}</div>
                <div class="label">{{ ucfirst($s) }}</div>
            </a>
        </div>
        @endforeach
    </div>

    {{-- Tabel --}}
    <div class="fp-admin-card">
        <div class="table-responsive">
            <table class="table fp-table mb-0">
                <thead>
                    <tr>
                        <th class="ps-3">Masuk</th>
                        <th>Nama</th>
                        <th>WhatsApp</th>
                        <th>Tgl Acara</th>
                        <th>Lokasi</th>
                        <th>Paket</th>
                        <th>Pesan</th>
                        <th>Status</th>
                        <th class="pe-3 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $b)
                    <tr>
                        <td class="ps-3 fp-mono small text-muted">{{ $b->created_at->format('d/m/y H:i') }}</td>
                        <td>
                            <strong>{{ $b->nama }}</strong>
                            @if($b->email)<br><span class="small text-muted">{{ $b->email }}</span>@endif
                        </td>
                        <td>
                            <a href="https://wa.me/{{ preg_replace('/\D/', '', preg_replace('/^0/', '62', $b->whatsapp)) }}"
                               target="_blank" rel="noopener" class="text-decoration-none fp-mono small">
                                {{ $b->whatsapp }} ↗
                            </a>
                        </td>
                        <td class="fp-mono small">{{ $b->tanggal_acara->format('d M Y') }}</td>
                        <td class="small">{{ $b->lokasi }}</td>
                        <td class="small">{{ $b->paket }}</td>
                        <td class="small text-muted" style="max-width:200px">{{ Str::limit($b->pesan, 60) ?: '—' }}</td>
                        <td><span class="fp-status fp-status-{{ $b->status }}">{{ strtoupper($b->status) }}</span></td>
                        <td class="pe-3">
                            <div class="d-flex gap-2 justify-content-end">
                                <form action="{{ route('admin.bookings.status', $b) }}" method="POST" class="d-flex gap-1">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" class="form-select form-select-sm rounded-0" style="width:auto"
                                            onchange="this.form.submit()" aria-label="Ubah status {{ $b->nama }}">
                                        @foreach(['baru', 'dihubungi', 'deal', 'batal'] as $s)
                                            <option value="{{ $s }}" {{ $b->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>
                                        @endforeach
                                    </select>
                                </form>
                                <form action="{{ route('admin.bookings.destroy', $b) }}" method="POST"
                                      onsubmit="return confirm('Hapus booking {{ $b->nama }}? Tindakan ini tidak bisa dibatalkan.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm rounded-0" aria-label="Hapus booking {{ $b->nama }}">✕</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted py-5">
                            <p class="fp-mono small mb-1">[ KOSONG ]</p>
                            Belum ada data booking{{ $filter ? " berstatus \"{$filter}\"" : '' }}.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $bookings->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
