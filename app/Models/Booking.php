<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'whatsapp',
        'email',
        'tanggal_acara',
        'lokasi',
        'paket',
        'pesan',
        'status',
    ];

    protected $casts = [
        'tanggal_acara' => 'date',
    ];
}
