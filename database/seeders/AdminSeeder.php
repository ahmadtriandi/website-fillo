<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Membuat akun admin pertama.
     * Username & password diambil dari .env (ADMIN_USERNAME / ADMIN_PASSWORD);
     * jika tidak diset, dipakai default admin / admin123 — SEGERA GANTI setelah login.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            ['username' => env('ADMIN_USERNAME', 'admin')],
            [
                'nama'     => 'Admin Filosofi',
                'password' => env('ADMIN_PASSWORD', 'admin123'), // otomatis di-hash oleh model
            ]
        );

        $this->command?->warn('Akun admin dibuat. Segera ganti password lewat menu "Ganti Password" setelah login pertama!');
    }
}
