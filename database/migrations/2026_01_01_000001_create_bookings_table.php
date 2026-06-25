<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('whatsapp', 20);
            $table->string('email', 100)->nullable();
            $table->date('tanggal_acara');
            $table->string('lokasi', 150);
            $table->string('paket', 50);
            $table->text('pesan')->nullable();
            $table->string('status', 20)->default('baru'); // baru | dihubungi | deal | batal
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
