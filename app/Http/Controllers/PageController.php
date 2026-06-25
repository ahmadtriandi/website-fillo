<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Data paket dipusatkan di sini agar mudah diubah.
     * Saat berkembang, pindahkan ke tabel database.
     */
    public static function paketData(): array
    {
        return [
                 [
                'nama'      => 'AI Photobooth',
                'harga'     => 'Rp 7.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Filter AI: anime, watercolor, oil painting, dll',
                    'Virtual costume & background AI',
                    'Cetak 4R + soft file',
                    'Sharing instan via QR code',
                    '2 kru operator',
                ],
            ],
            // [
            //     'nama'      => 'Basic Strip',
            //     'harga'     => 'Rp 1.500.000',
            //     'durasi'    => '2 jam',
            //     'populer'   => false,
            //     'fitur'     => [
            //         'Unlimited sesi foto',
            //         'Cetak strip 2x6 (2 lembar/sesi)',
            //         'Template desain custom',
            //         'Properti foto lengkap',
            //         '1 kru operator',
            //     ],
            // ],
              [   
                'nama'      => 'Fun Photobooth',
                'harga'     => 'Rp 7.000.000',
                'durasi'    => '5 jam',
                'populer'   => True,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Cetak strip 2x6 / 4R / 2R',
                    'props',
                    'Soft file',
                    '2 kru operator',
                ],
            ],
            // [
            //     'nama'      => 'Signature',
            //     'harga'     => 'Rp 2.500.000',
            //     'durasi'    => '3 jam',
            //     'populer'   => true,
            //     'fitur'     => [
            //         'Unlimited sesi foto',
            //         'Cetak strip 2x6 + 4R',
            //         'Soft file via Google Drive',
            //         'Backdrop premium pilihan',
            //         'Guest book strip',
            //         '2 kru operator',
            //     ],
            // ],
       
                

            [
                'nama'      => 'Custom',
                'harga'     => 'Hubungi kami',
                'durasi'    => 'Sesuai kebutuhan',
                'populer'   => false,
                'fitur'     => [
                    'Paket fleksibel sesuai kebutuhan acara',
                    'Konsultasi gratis untuk desain & konsep',
                    'Penawaran harga khusus untuk acara besar',
                    'Layanan tambahan seperti photobooth outdoor, green screen, dll.',
                    'Dukungan penuh dari tim profesional kami',
                ],
            ],
            [
                'nama'      => 'Hashtag Photobooth',
                'harga'     => 'Rp 5.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Cetak strip 4R (opsional)',
                    '1 kru operator',
                ],
            ],
            [
                'nama'      => 'Hologram Print',
                'harga'     => 'Rp 10.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Cetak foto efek hologram lenticular',
                    'Gambar berubah dari 2 sudut pandang berbeda',
                    'Ukuran 2R holographic',
                    'Soft file funphotobooth & Gif ',
                    'Sharing via QR code',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => 'Hashtag Live',
                'harga'     => 'Rp 4.500.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Live wall — foto tampil real-time di layar event',
                    'Tamu upload via hashtag Instagram / scan QR code',
                    'Branding hashtag & logo klien di tampilan wall',
                    'Moderasi foto sebelum tayang',
                    '2 kru operator + teknisi live wall',
                ],
            ],
            [
                'nama'      => 'High Angle Photobooth',
                'harga'     => 'Rp 5.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Kamera posisi atas (high angle)',
                    'Cocok untuk flat lay & group shot besar',
                    'Cetak 4R + soft file',
                    'Sharing via QR code',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => 'Registration Digital Book',
                'harga'     => 'Rp 5.000.000',
                'durasi'    => '4 jam',
                'populer'   => false,
                'fitur'     => [
                    'Check-in tamu via tablet / touchscreen',
                    'Input nama & data tamu secara digital',
                    'Foto tamu terekam otomatis saat registrasi',
                    'Ekspor data tamu ke Excel / PDF',
                    'Tampilan buku tamu digital berbranding acara',
                    'QR code undangan untuk check-in cepat',
                    '1 kru operator',
                ],
            ],
            [
                'nama'      => 'Photobox',
                'harga'     => 'Rp 8.000.000',
                'durasi'    => '5 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Booth tertutup — privat & nyaman',
                    'Layar sentuh untuk pilih filter,efek, dan template',
                    'Cetak 4R /strip 2x6 instan (2 lembar/sesi)',
                    'Template desain custom',
                    'Soft file via QR code',
                    '1 kru operator',
                ],
            ],
            [
                'nama'      => 'Mirror Photobooth',
                'harga'     => 'Rp 4.000.000',
                'durasi'    => '4 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Cermin interaktif full-body touchscreen',
                    'Cetak 4R / strip 2x6 instan + soft file',
                    'Sharing via QR code',
                    'Cocok untuk wedding & gala dinner',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => 'Mozaic Photobooth',
                'harga'     => 'Rp 7.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Foto tamu tersusun menjadi 1 gambar mozaik besar',
                    'Gambar mozaik dicetak sebagai kenang-kenangan acara',
                    'Cetak strip 2R / 4R per sesi + soft file mozaik',
                    'Sharing via QR code',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => 'Videobooth 360',
                'harga'     => 'Rp 5.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi video',
                    'Kamera berputar 360° mengelilingi subjek',
                    'Output slow motion',
                    'Musik background',
                    'Branding logo / watermark custom',
                    'Sharing instan via QR code',
                    'Platform & lighting 360 profesional',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => '180 Matrix Photobooth',
                'harga'     => 'Rp 8.000.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto & video',
                    'Multi-kamera sejajar 180° — efek bullet time ala Matrix',
                    'Freeze frame & slow motion dramatis',
                    'Branding logo / watermark klien',
                    'Sharing instan via QR code',
                    'Setup rig multi-kamera profesional',
                    '3 kru operator & teknisi',
                ],
            ],
            [
                'nama'      => 'Green Screen Photobooth',
                'harga'     => 'Rp 4.500.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    'Unlimited sesi foto',
                    'Background diganti virtual sesuai tema acara',
                    'Tema custom sesuai konsep acara',
                    'Hasil foto langsung terlihat di layar preview',
                    'Cetak 4R instan + soft file',
                    'Sharing via QR code',
                    '2 kru operator',
                ],
            ],
            [
                'nama'      => 'Photographer & Videographer',
                'harga'     => 'Rp 4.500.000',
                'durasi'    => '3 jam',
                'populer'   => false,
                'fitur'     => [
                    '1 fotografer profesional',
                    '1 videografer profesional',
                    'Edited photo',
                    'Raw file foto & video',
                    'Pengiriman via Google Drive',
                ],
            ],
            [
                'nama'      => 'Livestreaming',
                'harga'     => 'Rp 5.000.000',
                'durasi'    => '6 jam',
                'populer'   => false,
                'fitur'     => [
                    'Siaran langsung ke YouTube / Instagram / Facebook',
                    'Multi-platform streaming sekaligus',
                    'Kamera profesional + switcher multi-angle',
                    'Grafis & lower third berbranding acara',
                    'Moderasi komentar live',
                    'Recording full acara (file dikirim pasca event)',
                    '2 teknisi livestreaming',
                ],
            ],
      
        ];
    }

    public static function galeriData(): array
    {
        return [
            ['foto' => 'lion.jpg', 'label' => 'Lion parcel - AI Photobooth', 'ts' => '05.06.2026'],
            ['foto' => 'bjb.jpg', 'label' => 'Bank BJB — AI Photobooth',        'ts' => '21.03.2026'],
            ['foto' => 'ayuadam.jpg', 'label' => 'The Wedding of Ayu & Adam - Fun Photobooth',       'ts' => '24.05.2026'],
            ['foto' => 'hsbc.jpg', 'label' => 'HSBC — PADEL CONNECT - FUN Photobooth',   'ts' => '19.04.2026'],
            ['foto' => 'kilaibnu.jpg', 'label' => 'The Wedding of Kila & Ibnu - Fun Photobooth',    'ts' => '02.05.2026'],
            ['foto' => null, 'label' => 'LAUNCHING — KOPI SORE',   'ts' => '24.05.2026'],
            ['foto' => null, 'label' => 'GALA DINNER — PT MAJU',  'ts' => '10.06.2026'],
            ['foto' => null, 'label' => 'WEDDING — LISA & ARDI',   'ts' => '18.06.2026'],
        ];
    }

    public function home()
    {
        return view('pages.home', [
            'paket'  => self::paketData(),
            'galeri' => self::galeriData(),
        ]);
    }

    public function layanan()
    {
        return view('pages.layanan');
    }

    public function galeri()
    {
        return view('pages.galeri', [
            'galeri' => self::galeriData(),
        ]);
    }

    public function paket()
    {
        return view('pages.paket', [
            'paket' => self::paketData(),
        ]);
    }

    public function kontak()
    {
        return view('pages.kontak', [
            'paket' => self::paketData(),
        ]);
    }
}
