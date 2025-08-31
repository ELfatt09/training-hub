<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

            <!-- Fontawesome -->
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    </x-slot>

        <!-- Hero -->
     <section class="py-36 flex h-[90vh] w-full font-jakarta">
        <!-- Left Side -->
         <div class="h-full w-1/2 px-12 space-y-6">
            <!-- Hero text -->
             <div class="space-y-6">
                <div class="">
                    <h1 class="text-primary text-7xl font-bold">Lorem Ipsum</h1>
                    <h2 class="text-black text-6xl font-bold">Dolor sit amet <br> Consectetur Elit</h2>
                </div>

                <div>
                    <p class="text-xl text-gray">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
                </div>
             </div>
            <!-- Hero text -->

            <!-- Button -->
             <div class="flex items-center gap-6">
                <div>
                    <a class="bg-primary border-2 border-primary hover:bg-transparent hover:text-primary hover:border-primary transition text-white rounded-md py-2 px-4 text-xl" href="">Lorem Ipsum</a>
                </div>

                <div>
                    <h1 class="text-xl">Lorem iplgm dolor </br> sit amet consectetur.</h1>
                </div>

                <div>
                    <a class="bg-primary px-6 py-4 text-white rounded-full text-xl font-bold" href="#program"><i class="fa-solid fa-arrow-down-long"></i></a>
                </div>
             </div>
            <!-- Button -->
        </div>
        <!-- Left Side -->

        <!-- Right Side -->
         <div class="flex justify-end px-20 w-1/2 h-full">
            <!-- Image -->
                <div class="w-full h-full flex">
                <img class="w-full shadow-solid-teal rounded-md" src="https://picsum.photos/id/0/200/300" alt="">
            </div>
            <div class="bg-white w-fit h-fit px-4 py-2 shadow-lg absolute top-44 right-10 rounded-md">
                    <h1 class="text-xl">Lorem Ipsum</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- Image End -->

            <!-- Stats -->
             <div>
                <!-- Single Stats -->
                    <div>
                        <h1>500+</h1>
                        <h2>Lorem Ipsum</h2>
                    </div>
                <!-- Single Stats End -->
             </div>
            <!-- Stats End -->
         </div>
        <!-- Right Side -->
     </section>
    <!-- Hero End -->

            <!-- infinity Carousel -->
        <div class="overflow-hidden relative w-full bg-white py-6">
        <div class="flex animate-marquee space-x-12">
            @foreach(['logo-adf.svg','logo-bnp.svg','logo-citraHusada.svg','logo-denso.svg','logo-kirana.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-telkom.svg', 'logo-wika.svg'] as $logo)
                <img src="{{ asset('assets/logo/'.$logo) }}" 
                    class="h-16 object-contain" alt="sponsor">
            @endforeach

            @foreach(['logo-adf.svg','logo-bnp.svg','logo-citraHusada.svg','logo-denso.svg','logo-kirana.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-telkom.svg', 'logo-wika.svg'] as $logo)
                <img src="{{ asset('assets/logo/'.$logo) }}" 
                    class="h-16 object-contain" alt="sponsor">
            @endforeach
        </div>
        </div>
        <!-- infinity Carousel End -->

    <!-- Program Kejuruan -->
     <section id="program" class="h-[100vh] w-full flex flex-col space-y-12 justify-center items-center">
        <!-- Text -->
        <div class="flex flex-col justify-center items-center space-y-3">
            <h1 class="capitalize font-bold text-4xl"><i class="fa-solid fa-star-of-life text-secondary"></i> program kejuruan kami <i class="fa-solid fa-star-of-life text-secondary"></i></h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus. Maecenas lacus dui, porta eu <br> ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.</p>
        </div>

        <!-- Swiper -->
        
        <!-- Custom Buttons -->
        <div class="relative w-2/3 mx-auto py-6"> 
    <!-- Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach(range(1,8) as $item)
        <div class="swiper-slide w-fit">
          <div class="flex justify-center items-center">
            <i class="fa-solid fa-wrench text-5xl text-primary mb-3"></i>
          </div>
          <p class="text-sm text-center font-medium">Lorem Ipsum Dolor</p>
        </div>
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

        <div class="flex justify-center mt-4">
            <a href="#" class="capitalize flex items-center bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Lihat seluruh kejuruan <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
     </section>
    <!-- Program Kejuruan End -->

    <!-- Pelatihan Unggulan -->
     <section id="pelatihan" class="h-[100vh] w-full flex flex-col space-y-12 justify-center items-center">
        <!-- Title -->
        <div class="flex flex-col justify-center items-center space-y-3">
            <h1 class="capitalize font-bold text-4xl"><i class="fa-solid fa-star-of-life text-secondary"></i>pelatihan unggulan kami <i class="fa-solid fa-star-of-life text-secondary"></i></h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus. Maecenas lacus dui, porta eu <br> ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.</p>
        </div>

        <div class="grid grid-cols-3 gap-6">
            <x-card
            image='https://picsum.photos/id/1084/536/354?grayscale'
            title='Lorem Ipsum'
            pelajaran='11 Pelajaran'
            status='Online'
            harga='Gratis'
            deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa, Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa'
        />
            <x-card
            image='https://picsum.photos/id/1084/536/354?grayscale'
            title='Lorem Ipsum'
            pelajaran='11 Pelajaran'
            status='Online'
            harga='Gratis'
            deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa, Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa'
        />
            <x-card
            image='https://picsum.photos/id/1084/536/354?grayscale'
            title='Lorem Ipsum'
            pelajaran='11 Pelajaran'
            status='Online'
            harga='Gratis'
            deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa, Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa'
        />
        </div>

     </section>
    <!-- Pelatihan Unggulan End -->
</x-app-layout>
