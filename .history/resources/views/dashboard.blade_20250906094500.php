<x-app-layout class="w-full scroll-smooth">

    <!-- Hero -->
    <section id="beranda" class="flex h-fit md:h-[85vh] w-full font-jakarta bg-milk">
        <!-- Left Side -->
        <div class="h-full py-16 md:py-56 w-full px-6 md:w-1/2 md:px-20 space-y-12">
            <!-- Hero text -->
            <div class="space-y-6">
                <div class="w-full flex flex-col place-items-center md:place-items-start">
                    <h1 class="text-primary font-semibold text-2xl md:text-7xl">
                        Lorem Ipsum
                    </h1>
                    <h2 class="text-black font-semibold line-clamp-2 text-center md:text-start text-lg md:text-6xl">
                        Dolor sit amet Consectetur Elit
                    </h2>
                </div>

                <div>
                    <p class="font-jakarta font-medium text-darkoff text-sm md:text-md">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".
                    </p>
                </div>
            </div>
            <!-- Hero text -->

            <!-- Button -->
            <div class="md:grid grid-cols-3 place-items-center">
                <div>
                    <a class="col-span-1 bg-primary border-2 font-semibold border-primary hover:bg-transparent hover:text-primary hover:border-primary transition text-white rounded-md py-2 px-6 text-md md:text-xl" href="">Lorem Ipsum</a>
                </div>

                <div class="hidden md:flex place-items-center">
                    <h1 class="col-span-1 font-medium text-xl">Lorem ipsum dolor <br> sit amet.</h1>
                </div>

                <div>
                    <a class="hidden md:block col-span-1 bg-primary border border-primary hover:bg-transparent hover:text-primary transition px-5 py-4 text-white rounded-full text-xl font-bold" href="#program">
                        <i class="fa-solid fa-arrow-down-long"></i>
                    </a>
                </div>
            </div>
            <!-- Button -->
        </div>
        <!-- Left Side -->

        <!-- Right Side -->
        <div class="hidden md:flex flex-col justify-end mt-60 px-20 w-1/2 h-[50vh]">
            <!-- Image -->
            <div class="w-full h-full flex">
                <img class="w-full h-5/6 shadow-solid-teal rounded-md" src="https://picsum.photos/id/0/200/300" alt="">
            </div>
            <div class="bg-white w-fit h-fit px-4 py-2 shadow-lg absolute top-36 right-10 rounded-md">
                <h1 class="text-xl">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- Image End -->

            <!-- Stats -->
            <div class="grid grid-cols-4 font-jakarta">
                <!-- Single Stats -->
                @foreach(range(1, 4) as $i)
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold">Lorem Ipsum</h2>
                </div>
                @endforeach
                <!-- Single Stats End -->
            </div>
            <!-- Stats End -->
        </div>
        <!-- Right Side -->
    </section>
    <!-- Hero End -->

    <!-- Infinity Carousel -->
    <div class="overflow-hidden relative w-full bg-white py-6">
        <div class="flex animate-marquee space-x-12">
            @foreach(['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-wika.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                <img src="{{ asset('assets/logo/'.$logo) }}" class="h-5 lg:h-16 object-contain" alt="sponsor">
            @endforeach

            @foreach(['logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-denso.svg', 'logo-kirana.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-telkom.svg', 'logo-wika.svg'] as $logo)
                <img src="{{ asset('assets/logo/'.$logo) }}" class="h-5 lg:h-16 object-contain" alt="sponsor">
            @endforeach
        </div>
    </div>
    <!-- Infinity Carousel End -->

    <!-- Program Kejuruan -->
    <section id="kejuruan" class="h-[90vh] md:h-[50vh] w-full flex flex-col space-y-12 justify-center items-center bg-milk">
        <!-- Text -->
        <div class="flex flex-col px-6 md:px-0 justify-center items-center space-y-3">
            <h1 class="capitalize gap-4 font-bold text-md md:text-4xl">
                <i class="fa-solid fa-star-of-life text-secondary"></i> program kejuruan kami <i class="fa-solid fa-star-of-life text-secondary"></i>
            </h1>
            <p class="text-justify md:text-center font-medium text-gray-500 text-sm md:text-md line-clamp-4 md:line-clamp-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus. <br class="hidden md:block"> Maecenas lacus dui, porta eu ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.
            </p>
        </div>

        <!-- Swiper -->
        <div class="relative w-2/3 mx-auto py-6">
            <!-- Slider -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach(range(1, 8) as $item)
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
            <a href="#" class="capitalize flex items-center bg-primary border border-primary text-md px-2 py-1 md:px-4 md:py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Lihat seluruh kejuruan <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    <!-- Program Kejuruan End -->

    <!-- Pelatihan Unggulan -->
    <section id="pelatihan" class="h-fit md:h-[100vh] px-6 md:px-0 w-full flex flex-col space-y-12 justify-center items-center bg-milk">
        <!-- Title -->
        <div class="flex flex-col justify-center items-center space-y-3">
            <h1 class="capitalize font-bold text-md md:text-4xl">
                <i class="fa-solid fa-star-of-life text-secondary"></i> pelatihan unggulan kami <i class="fa-solid fa-star-of-life text-secondary"></i>
            </h1>
            <p class="text-justify md:text-center font-medium text-gray-500 text-sm md:text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus. Maecenas lacus dui, porta eu <br> ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.
            </p>
        </div>

        <div class="flex overflow-x-auto md:overflow-x-hidden snap-x md:snap-none snap-mandatory md:grid grid-cols-3 gap-6">
            <x-card
                image='https://picsum.photos/id/1084/536/354?grayscale'
                title='Lorem Ipsum'
                pelajaran='11 Pelajaran'
                status='Online'
                harga='Gratis'
                deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa,'
            />
            <x-card
                image='https://picsum.photos/id/1084/536/354?grayscale'
                title='Lorem Ipsum'
                pelajaran='11 Pelajaran'
                status='Online'
                harga='Gratis'
                deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa,'
            />
            <x-card
                class=""
                image='https://picsum.photos/id/1084/536/354?grayscale'
                title='Lorem Ipsum'
                pelajaran='11 Pelajaran'
                status='Online'
                harga='Gratis'
                deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa,'
            />
        </div>

        <div class="flex justify-center mt-4">
            <a href="#" class="capitalize flex items-center text-sm md:text-md bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Pelajari lebih lanjut <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    <!-- Pelatihan Unggulan End -->

    {{-- Additional sections omitted for brevity --}}
</x-app-layout>
