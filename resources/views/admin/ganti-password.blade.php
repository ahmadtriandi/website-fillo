@extends('layouts.admin')

@section('title', 'Ganti Password')

@section('content')
<div class="container" style="max-width:520px">
    <div class="fp-admin-card p-4 p-md-5">
        <p class="fp-mono small text-muted mb-1">[ AKUN ]</p>
        <h1 class="fp-heading h3 mb-4">Ganti Password</h1>

        @if(session('gagal'))
            <div class="alert alert-danger rounded-0 small py-2">{{ session('gagal') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger rounded-0 small py-2">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.password.update') }}" method="POST" class="fp-form">
            @csrf
            <div class="mb-3">
                <label for="password_lama" class="form-label fp-mono small">PASSWORD LAMA</label>
                <input type="password" class="form-control" id="password_lama" name="password_lama" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password_baru" class="form-label fp-mono small">PASSWORD BARU (MIN. 8 KARAKTER)</label>
                <input type="password" class="form-control" id="password_baru" name="password_baru" required minlength="8">
            </div>
            <div class="mb-4">
                <label for="password_baru_confirmation" class="form-label fp-mono small">ULANGI PASSWORD BARU</label>
                <input type="password" class="form-control" id="password_baru_confirmation" name="password_baru_confirmation" required minlength="8">
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-dark px-4">Simpan</button>
                <a href="{{ route('admin.bookings.index') }}" class="btn btn-outline-dark rounded-0">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
