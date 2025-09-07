<x-guest-layout>
            <div class="relative w-2/3 mx-auto py-6"> 
    <!-- Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach(range(1,8) as $magang)
                <x-card-magang
                logo="{{ asset('assets/logo/logo-wika.svg') }}"
                jobdesk="Petani"
                perusahaan="PT. Wika"
                lokasi="Jabar, Bantar Gebang"
                tanggalHabis="12/12/2012"
            />
        @endforeach
      </div>
    </div>

    <!-- Prev Button -->
    <button class="custom-prev absolute top-1/2 -translate-y-1/2 -left-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
        <i class="fa-solid fa-chevron-left text-teal-600"></i>
    </button>

    <!-- Next Button -->
    <button class="custom-next absolute top-1/2 -translate-y-1/2 -right-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
        <i class="fa-solid fa-chevron-right text-teal-600"></i>
    </button>
</div>
</x-guest-layout>