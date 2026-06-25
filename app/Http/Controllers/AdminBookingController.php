<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public const STATUS = ['baru', 'dihubungi', 'deal', 'batal'];

    public function index(Request $request)
    {
        $filter = $request->query('status');

        $bookings = Booking::query()
            ->when(in_array($filter, self::STATUS, true), fn ($q) => $q->where('status', $filter))
            ->when($request->filled('q'), function ($q) use ($request) {
                $cari = $request->query('q');
                $q->where(function ($w) use ($cari) {
                    $w->where('nama', 'like', "%{$cari}%")
                      ->orWhere('whatsapp', 'like', "%{$cari}%")
                      ->orWhere('lokasi', 'like', "%{$cari}%");
                });
            })
            ->orderByDesc('created_at')
            ->paginate(15)
            ->withQueryString();

        $statistik = [
            'total'     => Booking::count(),
            'baru'      => Booking::where('status', 'baru')->count(),
            'dihubungi' => Booking::where('status', 'dihubungi')->count(),
            'deal'      => Booking::where('status', 'deal')->count(),
            'batal'     => Booking::where('status', 'batal')->count(),
        ];

        return view('admin.bookings', compact('bookings', 'statistik', 'filter'));
    }

    public function updateStatus(Request $request, Booking $booking): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'in:' . implode(',', self::STATUS)],
        ]);

        $booking->update(['status' => $request->input('status')]);

        return back()->with('sukses', "Status booking {$booking->nama} diperbarui.");
    }

    public function destroy(Booking $booking): RedirectResponse
    {
        $nama = $booking->nama;
        $booking->delete();

        return back()->with('sukses', "Booking {$nama} dihapus.");
    }
}
