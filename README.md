# Filosofi Photobooth & Videobooth

Website company profile + form booking untuk Filosofi Photobooth & Videobooth.
Dibangun dengan **Laravel 11 (PHP 8.2+)** dan **Bootstrap 5**.

## Fitur
- Halaman: Beranda, Layanan, Galeri, Paket & Harga, Booking/Kontak
- Form booking dengan validasi, tersimpan ke database (tabel `bookings`)
- Desain monokrom hitam-putih mengikuti identitas logo, dengan aksen "flash" kuning
- Responsif (mobile-first) memakai Bootstrap 5

## Persyaratan
- PHP >= 8.2 (dengan ekstensi pdo_sqlite atau pdo_mysql)
- Composer

## Cara Menjalankan (Lokal)
```bash
# 1. Install dependensi
composer install

# 2. Salin file environment & generate app key
cp .env.example .env
php artisan key:generate

# 3. Buat database SQLite (default)
touch database/database.sqlite

# 4. Jalankan migrasi (membuat tabel bookings)
php artisan migrate

# 5. Jalankan server development
php artisan serve
```
Buka http://localhost:8000

### Memakai MySQL
Edit `.env`, ganti blok DB:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filosofi_photobooth
DB_USERNAME=root
DB_PASSWORD=
```
lalu jalankan ulang `php artisan migrate`.

## Halaman Admin
Akses di **`/admin`** (mis. http://localhost:8000/admin).

Login admin diverifikasi ke **database MySQL** (tabel `admins`), password tersimpan ter-hash (bcrypt).

### Membuat akun admin pertama
Setelah `php artisan migrate`, jalankan salah satu:

**Cara 1 — Seeder** (memakai ADMIN_USERNAME / ADMIN_PASSWORD dari `.env`):
```bash
php artisan db:seed
```

**Cara 2 — Interaktif di terminal** (juga dipakai untuk reset password / menambah admin lain):
```bash
php artisan admin:buat
```

Setelah login pertama, ganti password lewat menu **Ganti Password** di pojok kanan atas dashboard.

### Fitur dashboard
- Statistik jumlah booking per status (Semua / Baru / Dihubungi / Deal / Batal) — klik kartu untuk memfilter
- Pencarian berdasarkan nama, nomor WA, atau lokasi
- Tombol nomor WhatsApp langsung membuka chat wa.me
- Ubah status booking lewat dropdown (tersimpan otomatis)
- Hapus booking (dengan konfirmasi)
- Ganti password admin dari dashboard
- Form login dibatasi 10 percobaan per menit (anti brute-force)

## Logo Klien (Marquee "Dipercaya Oleh")
Taruh file logo di `public/assets/img/clients/`, lalu edit daftar `$klien` di bagian atas section "KLIEN KAMI" pada `resources/views/pages/home.blade.php` — satu baris per logo, marquee menyesuaikan otomatis.

## Notifikasi WhatsApp Booking Masuk
Ada dua mekanisme yang bekerja bersamaan:

### 1. Tombol "Konfirmasi via WhatsApp" (gratis, tanpa daftar apa pun)
Setelah pengunjung submit form, muncul tombol yang membuka chat WA ke nomormu
dengan detail booking sudah terisi otomatis. Cukup isi di `.env`:
```
WA_ADMIN=6281234567890
```
(format 62, bukan 08)

### 2. Notif otomatis ke WA-mu via Fonnte (opsional)
Setiap booking masuk, server langsung mengirim pesan WA berisi detail booking ke nomormu —
tanpa menunggu pengunjung menekan tombol apa pun.

Cara setup:
1. Daftar di **fonnte.com** (ada paket gratis untuk volume kecil)
2. Hubungkan nomor WA pengirim dengan scan QR di dashboard Fonnte
3. Salin token API, lalu isi di `.env`:
   ```
   FONNTE_TOKEN=token-dari-fonnte
   WA_ADMIN=6281234567890
   ```
4. `php artisan config:clear` lalu restart server

Jika `FONNTE_TOKEN` kosong, notif otomatis dilewati tanpa error — booking tetap tersimpan
dan tombol konfirmasi tetap berfungsi. Kegagalan kirim notif dicatat di `storage/logs/laravel.log`.

Gateway lain (Wablas, Watzap, Twilio, WhatsApp Cloud API resmi) bisa dipakai dengan
mengubah endpoint di `app/Services/NotifikasiWa.php`.

## Melihat Data Booking
Data booking tersimpan di tabel `bookings`. Cara cepat melihatnya:
```bash
php artisan tinker
>>> App\Models\Booking::latest()->get();
```
(Bisa dikembangkan menjadi halaman admin dengan Laravel Filament/Nova.)

## Mengganti Konten
- **Paket & harga**: edit method `paketData()` di `app/Http/Controllers/PageController.php`
- **Foto galeri**: taruh foto asli di `public/assets/img/galeri/` lalu update `resources/views/pages/galeri.blade.php`
- **Kontak (WA/email/IG)**: edit `resources/views/partials/footer.blade.php` dan `pages/kontak.blade.php`
- **Logo**: file ada di `public/assets/img/` (versi putih untuk background gelap, hitam untuk terang)

## Struktur Penting
```
app/Http/Controllers/PageController.php     # halaman statis + data paket
app/Http/Controllers/BookingController.php  # proses form booking
app/Models/Booking.php                      # model booking
database/migrations/...create_bookings...   # tabel bookings
resources/views/layouts/app.blade.php       # layout utama
resources/views/pages/                      # semua halaman
public/assets/css/style.css                 # identitas visual
public/assets/img/                          # logo & favicon
routes/web.php                              # daftar route
```
