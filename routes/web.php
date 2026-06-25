<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/paket', [PageController::class, 'paket'])->name('paket');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    // Login (tanpa middleware)
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])
        ->middleware('throttle:10,1') // maks. 10 percobaan login per menit
        ->name('admin.login.attempt');

    // Area terproteksi
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminBookingController::class, 'index'])->name('admin.bookings.index');
        Route::patch('/bookings/{booking}/status', [AdminBookingController::class, 'updateStatus'])->name('admin.bookings.status');
        Route::delete('/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('admin.bookings.destroy');

        Route::get('/password', [AdminAuthController::class, 'showGantiPassword'])->name('admin.password');
        Route::post('/password', [AdminAuthController::class, 'gantiPassword'])->name('admin.password.update');

        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
