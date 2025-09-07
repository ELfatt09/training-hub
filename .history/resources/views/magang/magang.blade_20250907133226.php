<x-guest-layout>

    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    @foreach (range(1,3) as $item)
        <x-card-magang
        logo="{{ asset('assets/logo/logo-wika.svg') }}"
        jobdesk="Petani"
        perusahaan="PT. Wika"
        lokasi="Jabar, Bantar Gebang"
        tanggalHabis="12/12/2012"
    />
    @endforeach
</x-guest-layout>