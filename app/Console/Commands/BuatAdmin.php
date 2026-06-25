<?php

namespace App\Console\Commands;

use App\Models\Admin;
use Illuminate\Console\Command;

class BuatAdmin extends Command
{
    protected $signature = 'admin:buat';

    protected $description = 'Membuat akun admin baru atau mereset password admin yang sudah ada';

    public function handle(): int
    {
        $nama     = $this->ask('Nama lengkap');
        $username = $this->ask('Username');
        $password = $this->secret('Password (min. 8 karakter)');

        if (strlen((string) $password) < 8) {
            $this->error('Password minimal 8 karakter.');
            return self::FAILURE;
        }

        if ($password !== $this->secret('Ulangi password')) {
            $this->error('Password tidak sama.');
            return self::FAILURE;
        }

        $admin = Admin::updateOrCreate(
            ['username' => $username],
            ['nama' => $nama, 'password' => $password]
        );

        $this->info($admin->wasRecentlyCreated
            ? "Admin '{$username}' berhasil dibuat."
            : "Password admin '{$username}' berhasil direset.");

        return self::SUCCESS;
    }
}
