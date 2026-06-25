<footer class="fp-footer pt-5 pb-4">
    <div class="container">
        <div class="row gy-4 align-items-start">
            <div class="col-lg-5">
                <img src="{{ asset('assets/img/logo-wordmark-white.png') }}" alt="Filosofi Photobooth & Videobooth" class="img-fluid mb-3" style="max-width: 180px;">
                <p class="text-secondary small mb-0">
                    Setiap momen punya cerita. Kami membantu tamu acaramu
                    pulang membawa kenangan yang bisa digenggam.
                </p>
            </div>
            <div class="col-6 col-lg-3">
                <p class="fp-label mb-3">Navigasi</p>
                <ul class="list-unstyled small d-grid gap-2">
                    {{-- <li><a href="{{ route('layanan') }}" class="fp-footer-link">Layanan</a></li> --}}
                    <li><a href="{{ route('galeri') }}" class="fp-footer-link">Galeri</a></li>
                    <li><a href="{{ route('paket') }}" class="fp-footer-link">Paket &amp; Harga</a></li>
                    <li><a href="{{ route('kontak') }}" class="fp-footer-link">Booking</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-4">
                <p class="fp-label mb-3">Kontak</p>
                <ul class="list-unstyled small d-grid gap-2 text-secondary">
                    <li>
                        <a href="https://wa.me/6289690888426"
                           target="_blank" rel="noopener"
                           class="fp-footer-link d-inline-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                            +62 896-9088-8426 (Wiwit)
                        </a>
                    </li>
                    <li>
                        <a href="mailto:fphotobooth22@gmail.com"
                           class="fp-footer-link d-inline-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                            </svg>
                            fphotobooth22@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/filosofi_photobooth"
                           target="_blank" rel="noopener"
                           class="fp-footer-link d-inline-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm.003 1.44c2.136 0 2.39.009 3.233.048.78.036 1.203.166 1.485.276.374.145.64.319.92.599s.453.546.598.92c.11.282.24.705.276 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.036.78-.166 1.203-.276 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.282.11-.705.24-1.485.276-.843.039-1.096.047-3.233.047-2.136 0-2.389-.008-3.232-.047-.78-.036-1.203-.166-1.485-.276a2.47 2.47 0 0 1-.92-.598 2.47 2.47 0 0 1-.598-.92c-.11-.282-.24-.704-.276-1.484-.039-.844-.047-1.097-.047-3.233s.008-2.388.047-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.598-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.843-.038 1.096-.047 3.232-.047zm0 2.452a4.108 4.108 0 1 0 0 8.215 4.108 4.108 0 0 0 0-8.215zm0 6.775a2.667 2.667 0 1 1 0-5.334 2.667 2.667 0 0 1 0 5.334zm5.23-6.937a.96.96 0 1 1-1.92 0 .96.96 0 0 1 1.92 0z"/>
                            </svg>
                            @filosofi_photobooth
                        </a>
                    </li>
                    <li>Area layanan: Cikarang &amp; Jabodetabek</li>
                </ul>
            </div>
        </div>
        <hr class="border-secondary opacity-25 my-4">
        <p class="small text-secondary mb-0 fp-mono">&copy; {{ date('Y') }} FILOSOFI PHOTOBOOTH &amp; VIDEOBOOTH</p>
    </div>
</footer>
