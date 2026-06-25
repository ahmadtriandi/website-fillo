<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Services\NotifikasiWa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama'          => ['required', 'string', 'max:100'],
            'whatsapp'      => ['required', 'string', 'max:20'],
            'email'         => ['nullable', 'email', 'max:100'],
            'tanggal_acara' => ['required', 'date', 'after_or_equal:today'],
            'lokasi'        => ['required', 'string', 'max:150'],
            'paket'         => ['required', 'string', 'max:50'],
            'pesan'         => ['nullable', 'string', 'max:1000'],
        ], [
            'nama.required'           => 'Nama wajib diisi.',
            'whatsapp.required'       => 'Nomor WhatsApp wajib diisi.',
            'tanggal_acara.required'  => 'Tanggal acara wajib diisi.',
            'tanggal_acara.after_or_equal' => 'Tanggal acara tidak boleh di masa lalu.',
            'lokasi.required'         => 'Lokasi acara wajib diisi.',
            'paket.required'          => 'Silakan pilih paket.',
        ]);

        $booking = Booking::create($validated);

        // Notif otomatis ke WA admin (di-skip jika gateway belum dikonfigurasi)
        NotifikasiWa::bookingBaru($booking);

        return redirect()
            ->route('kontak')
            ->with('sukses', 'Permintaan booking terkirim. Tim kami akan menghubungi kamu via WhatsApp dalam 1x24 jam.')
            ->with('wa_konfirmasi', NotifikasiWa::linkKonfirmasi($booking));
    }
}
