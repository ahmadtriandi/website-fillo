<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'login_terakhir',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password'        => 'hashed', // otomatis di-bcrypt saat disimpan
        'login_terakhir'  => 'datetime',
    ];
}
