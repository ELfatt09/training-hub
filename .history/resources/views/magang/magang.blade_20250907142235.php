<x-app-layout>
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <div class="relative w-4/5 flex justify-center items-center mx-auto py-6">
        <div class="swiper magangSwiper gap-6 px-6">
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
        </div>

             <!-- Prev Button -->
            <button 
            class="swiper-button-prev -ml-12 absolute top-1/2 -translate-y-1/2 
                    bg-white p-3 rounded-full shadow hover:bg-teal-100 
                    [&::after]:hidden">
                <i class="fa-solid fa-chevron-left text-teal-600"></i>
            </button>

            <!-- Next Button -->
            <button 
            class="swiper-button-next absolute top-1/2 -translate-y-1/2
                    bg-white p-3 rounded-full shadow hover:bg-teal-100 
                    [&::after]:hidden">
                <i class="fa-solid fa-chevron-right text-teal-600"></i>
            </button>
    </div>
    
</x-app-layout>

