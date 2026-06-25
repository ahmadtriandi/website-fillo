<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_id')) {
            return redirect()->route('admin.bookings.index');
        }

        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $admin = Admin::where('username', $request->input('username'))->first();

        if (! $admin || ! Hash::check($request->input('password'), $admin->password)) {
            return back()
                ->withInput($request->only('username'))
                ->with('gagal', 'Username atau password salah.');
        }

        $admin->update(['login_terakhir' => now()]);

        $request->session()->regenerate();
        $request->session()->put('admin_id', $admin->id);
        $request->session()->put('admin_nama', $admin->nama);

        return redirect()->route('admin.bookings.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget(['admin_id', 'admin_nama']);
        $request->session()->regenerate();

        return redirect()->route('admin.login')->with('sukses', 'Berhasil logout.');
    }

    public function showGantiPassword()
    {
        return view('admin.ganti-password');
    }

    public function gantiPassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password_lama' => ['required', 'string'],
            'password_baru' => ['required', 'string', Password::min(8), 'confirmed'],
        ], [
            'password_baru.confirmed' => 'Konfirmasi password baru tidak sama.',
            'password_baru.min'       => 'Password baru minimal 8 karakter.',
        ]);

        $admin = Admin::findOrFail(session('admin_id'));

        if (! Hash::check($request->input('password_lama'), $admin->password)) {
            return back()->with('gagal', 'Password lama salah.');
        }

        $admin->update(['password' => $request->input('password_baru')]);

        return redirect()->route('admin.bookings.index')
            ->with('sukses', 'Password berhasil diganti.');
    }
}
