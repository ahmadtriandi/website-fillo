<?php

namespace App\Services;

use App\Models\Booking;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NotifikasiWa
{
    /**
     * Kirim notifikasi booking baru ke WA admin via Fonnte.
     * Tidak melempar exception — kegagalan notif tidak boleh
     * menggagalkan proses booking; cukup dicatat di log.
     */
    public static function bookingBaru(Booking $booking): void
    {
        $token  = config('filosofi.fonnte_token');
        $tujuan = config('filosofi.wa_admin');

        if (empty($token) || empty($tujuan)) {
            return; // gateway tidak dikonfigurasi — lewati saja
        }

        $pesan = "🔔 *BOOKING BARU MASUK*\n\n"
            . "Nama     : {$booking->nama}\n"
            . "WhatsApp : {$booking->whatsapp}\n"
            . "Tanggal  : {$booking->tanggal_acara->format('d M Y')}\n"
            . "Lokasi   : {$booking->lokasi}\n"
            . "Paket    : {$booking->paket}\n"
            . ($booking->pesan ? "Pesan    : {$booking->pesan}\n" : '')
            . "\nCek dashboard: " . route('admin.bookings.index');

        try {
            $respons = Http::timeout(10)
                ->withHeaders(['Authorization' => $token])
                ->asForm()
                ->post('https://api.fonnte.com/send', [
                    'target'  => $tujuan,
                    'message' => $pesan,
                ]);

            if (! $respons->successful()) {
                Log::warning('Notif WA Fonnte gagal', ['respons' => $respons->body()]);
            }
        } catch (\Throwable $e) {
            Log::warning('Notif WA Fonnte error', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Normalisasi nomor lokal (08xx / +62xx) menjadi format 62xx.
     */
    public static function formatNomor(string $nomor): string
    {
        $angka = preg_replace('/\D/', '', $nomor);

        return preg_replace('/^0/', '62', $angka);
    }

    /**
     * Link wa.me berisi rangkuman booking, untuk tombol
     * "Konfirmasi via WhatsApp" milik pengunjung.
     */
    public static function linkKonfirmasi(Booking $booking): ?string
    {
        $tujuan = config('filosofi.wa_admin');

        if (empty($tujuan)) {
            return null;
        }

        $teks = "Halo Filosofi Photobooth! Saya baru mengisi form booking:\n\n"
            . "Nama: {$booking->nama}\n"
            . "Tanggal: {$booking->tanggal_acara->format('d M Y')}\n"
            . "Lokasi: {$booking->lokasi}\n"
            . "Paket: {$booking->paket}\n\n"
            . "Mohon info ketersediaan tanggalnya ya. Terima kasih!";

        return 'https://wa.me/' . self::formatNomor($tujuan) . '?text=' . rawurlencode($teks);
    }
}
