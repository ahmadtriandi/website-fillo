@extends('layouts.admin')

@section('title', 'Login Admin')

@section('content')
<div class="fp-login-wrap px-3" style="margin:-1.5rem 0">
    <div class="fp-admin-card p-4 p-md-5" style="max-width:420px;width:100%">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/img/logo-monogram-black.png') }}" alt="Filosofi" height="64" class="mb-3">
            <p class="fp-mono small mb-0">[ AREA ADMIN ]</p>
        </div>

        @if(session('gagal'))
            <div class="alert alert-danger rounded-0 small py-2">{{ session('gagal') }}</div>
        @endif
        @if(session('sukses'))
            <div class="alert alert-success rounded-0 small py-2">{{ session('sukses') }}</div>
        @endif

        <form action="{{ route('admin.login.attempt') }}" method="POST" class="fp-form">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label fp-mono small">USERNAME</label>
                <input type="text" class="form-control" id="username" name="username"
                       value="{{ old('username') }}" required autofocus>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label fp-mono small">PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Masuk</button>
        </form>
    </div>
</div>
@endsection
