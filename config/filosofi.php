<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifikasi WhatsApp
    |--------------------------------------------------------------------------
    | wa_admin     : nomor WA pemilik (format 62xxx) — tujuan notif booking
    |                dan tombol "Konfirmasi via WhatsApp" milik pengunjung.
    | fonnte_token : token API dari fonnte.com. Kosongkan jika tidak memakai
    |                notif otomatis; tombol WA pengunjung tetap berfungsi.
    */

    'wa_admin'     => env('WA_ADMIN', ''),
    'fonnte_token' => env('FONNTE_TOKEN', ''),

];
