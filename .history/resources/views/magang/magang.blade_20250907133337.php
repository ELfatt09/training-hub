<x-guest-layout>
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach (range(1, 6) as $item)
                <div class="swiper-slide">
                    <x-card-magang
                        logo="{{ asset('assets/logo/logo-wika.svg') }}"
                        jobdesk="Petani"
                        perusahaan="PT. Wika"
                        lokasi="Jabar, Bantar Gebang"
                        tanggalHabis="12/12/2012"
                    />
                </div>
            @endforeach
        </div>

        <!-- Navigasi -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</x-guest-layout>
