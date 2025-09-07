<x-guest-layout>
    {{-- Section 1 --}}
        <div class="">

        </div>
    {{-- Section 1 --}}

    {{-- Section 2 --}}
        <div class="w-full flex flex-col justify-center items-center">
            <div class="flex justify-between items-end w-4/5">
               <div>
                    <div class="text-primary capitalize font-bold text-xl">
                        <h1>magang dalam negeri</h1>
                    </div>

                    <div>
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </h2>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consectetur nihil nobis quibusdam tempora voluptates. Praesentium totam debitis quaerat optio.</p>
                    </div>
               </div>

               <div class="underline text-primary">
                    <a>lihat lebih banyak</a>
               </div>
            </div>

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
            class="swiper-button-next -mr-6 absolute top-1/2 -translate-y-1/2
                    bg-white p-3 rounded-full shadow hover:bg-teal-100 
                    [&::after]:hidden">
                <i class="fa-solid fa-chevron-right text-teal-600"></i>
            </button>
            </div>
        </div>
    {{-- Section 2 --}}
    
</x-guest-layout>

