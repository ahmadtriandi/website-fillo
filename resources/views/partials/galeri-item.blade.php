{{-- Butuh variabel $item: ['foto' => string|null, 'label' => string, 'ts' => string] --}}
<figure class="fp-galeri-item mb-0">
    <div class="fp-galeri-frame d-flex align-items-center justify-content-center overflow-hidden">
        @if(!empty($item['foto']))
            <img src="{{ asset('assets/img/galeri/' . $item['foto']) }}"
                 alt="{{ $item['label'] }}"
                 class="w-100 h-100"
                 style="object-fit: cover"
                 loading="lazy">
        @else
            <img src="{{ asset('assets/img/logo-monogram-white.png') }}" alt="" height="56" class="opacity-50">
        @endif
    </div>
    <figcaption class="fp-mono small pt-2 d-flex justify-content-between text-white">
        <span>{{ $item['label'] }}</span>
        <span class="text-muted">{{ $item['ts'] }}</span>
    </figcaption>
</figure>
