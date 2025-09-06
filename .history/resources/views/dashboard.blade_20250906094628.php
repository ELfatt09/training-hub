<x-app-layout class="w-full scroll-smooth">

    <!-- Hero -->
    <section id="beranda" class="flex h-fit md:h-[85vh] w-full font-jakarta bg-milk">
        <!-- Left Side -->
        <div class="h-full py-16 md:py-56 w-full px-6 md:w-1/2 md:px-20 space-y-12">
            <!-- Hero text -->
            <div class="space-y-6">
                <div class="w-full flex flex-col place-items-center md:place-items-start">
                    <h1 class="text-primary text-2xl font-semibold md:text-7xl">Lorem Ipsum</h1>
                    <h2 class="text-black text-lg font-semibold line-clamp-2 text-center md:text-6xl md:text-start">
                        Dolor sit amet Consectetur Elit
                    </h2>
                </div>
                <div>
                    <p class="text-sm md:text-md font-jakarta font-medium text-darkoff">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".
                    </p>
                </div>
            </div>
            <!-- Hero text -->

            <!-- Button -->
            <div class="md:grid grid-cols-3 place-items-center">
                <div>
                    <a class="col-span-1 bg-primary border-2 font-semibold border-primary hover:bg-transparent hover:text-primary hover:border-primary transition text-white rounded-md py-2 px-6 text-md md:text-xl" href="">
                        Lorem Ipsum
                    </a>
                </div>
                <div class="hidden md:flex place-items-center">
                    <h1 class="col-span-q text-xl font-medium">Lorem ipsum dolor </br> sit amet.</h1>
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
    <section id="kejuruan" class="h-[90vh] md-h[50vh] w-full flex flex-col space-y-12 justify-center items-center bg-milk">
        <!-- Text -->
        <div class="flex flex-col px-6 md:px-0 justify-center items-center space-y-3">
            <h1 class="capitalize gap-4 font-bold text-md md:text-4xl">
                <i class="fa-solid fa-star-of-life text-secondary"></i> program kejuruan kami <i class="fa-solid fa-star-of-life text-secondary"></i>
            </h1>
            <p class="text-justify md:text-center text-sm md:text-md font-medium text-gray-500 line-clamp-4 md:line-clamp-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus.
                <br class="hidden md:block"> Maecenas lacus dui, porta eu ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.
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
            <p class="text-justify md:text-center text-sm md:text-lg font-medium text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus. Maecenas lacus dui, porta eu
                <br> ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut, lobortis aliquet orci.
            </p>
        </div>

        <div class="flex overflow-x-auto md:overflow-x-hidden snap-x md:snap-none snap-mandatory md:grid grid-cols-3 gap-6">
            @foreach(range(1, 3) as $i)
            <x-card
                image='https://picsum.photos/id/1084/536/354?grayscale'
                title='Lorem Ipsum'
                pelajaran='11 Pelajaran'
                status='Online'
                harga='Gratis'
                deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa,'
            />
            @endforeach
        </div>

        <div class="flex justify-center mt-4">
            <a href="#" class="capitalize flex items-center text-sm md:text-md bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Pelajari lebih lanjut <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    <!-- Pelatihan Unggulan End -->

    {{-- Kata Pengguna --}}
    <section id="katapengguna" class="md:flex flex-col w-full h-fit md:h-[80vh] py-12 md:px-10 bg-milk">
        <!-- Title -->
        <div class="flex flex-col place-items-center md:block gap-2 px-6 md:px-32">
            <div class="flex place-items-center w-full items-center justify-center gap-4">
                <h1 class="text-4xl font-bold hidden md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i> Apa kata pengguna kami? <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
                <h1 class="capitalize font-bold text-md md:text-4xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i> apa kata pengguna kami? <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
            </div>
            <p class="text-sm md:text-lg font-medium text-gray-500 mt-4 text-justify md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <!-- Mobile: Auto-Slide Carousel -->
        <div class="overflow-hidden md:hidden relative w-full bg-transparent py-6">
            <div class="flex animate-marquee20 space-x-6 w-max">
                @foreach([1, 2, 3, 4] as $i)
                <x-comment-card
                    username="User {{ $i }}"
                    status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maxime dolorem blanditiis. Nisi debitis culpa quidem?"
                />
                @endforeach
                {{-- Duplicate biar seamless looping --}}
                @foreach([1, 2, 3, 4] as $i)
                <x-comment-card
                    username="User {{ $i }}"
                    status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse maxime dolorem blanditiis. Nisi debitis culpa quidem?"
                />
                @endforeach
            </div>
        </div>

        <!-- Desktop: Grid -->
        <div class="hidden md:grid grid-cols-2 px-32 gap-4 mt-6 place-items-center place-content-center">
            @foreach(range(1, 4) as $i)
            <x-comment-card
                username="Johan Liebert"
                status="Designer at Google"
                comment="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse maxime dolorem blanditiis..."
            />
            @endforeach
        </div>
    </section>
    {{-- Kata Pengguna End --}}

    {{-- CTA --}}
    <section class="w-full h-[70vh] py-12 px-12 hidden md:flex justify-center items-center bg-milk">
        <div class="w-full h-full rounded-2xl px-24 space-y-8 flex flex-col justify-center" style="background-image: url('assets/backgroundCTA.png'); background-size: cover; object-fit: cover;">
            {{-- Title --}}
            <div>
                <h1 class="text-6xl text-white font-bold">Lorem Ipsum Dolor <br> Sit Amet Conse.</h1>
            </div>
            {{-- Desc --}}
            <div class="max-w-xl text-white">
                Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </div>
            {{-- Button --}}
            <div class="flex gap-6">
                <div>
                    <a class="px-4 py-2 bg-secondary border border-secondary rounded-lg text-white hover:bg-transparent transition-all" href="">Ikuti Pelatihan</a>
                </div>
                <div>
                    <a class="px-4 py-2 bg-secondary border border-secondary rounded-lg text-white hover:bg-transparent transition-all" href="">Jelajahi Lowongan Magang</a>
                </div>
            </div>
            {{-- Info --}}
            <div class="flex gap-6">
                @foreach(range(1, 2) as $i)
                <div>
                    <h2 class="capitalize text-white"><i class="fa-regular fa-circle-check"></i> Proses pendaftaran mudah</h2>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- CTA End--}}

    {{-- Article --}}
    <section class="flex flex-col w-full h-fit md:h-[120vh] pb-12 md:pb-0 space-y-6 md:space-y-0 md:px-12 bg-milk py-12">
        <!-- Title -->
        <div class="block gap-2 px-0 md:px-32 mb-0 md:mb-12">
            <div class="flex md:grid grid-cols-4 gap-4 justify-center items-center">
                <div class="flex w-full justify-center items-center gap-4 md:col-span-1">
                    <h1 class="hidden md:flex text-md md:text-4xl font-bold">
                        <i class="fa-solid fa-star-of-life text-secondary mr-2 items-center"></i> Artikel Kami
                    </h1>
                    <h1 class="capitalize font-bold text-md md:text-4xl flex items-center gap-2 md:hidden">
                        <i class="fa-solid fa-star-of-life text-secondary"></i> artikel kami <i class="fa-solid fa-star-of-life text-secondary"></i>
                    </h1>
                </div>
                <span class="hidden md:inline-block w-full h-[.5px] bg-black md:col-span-3"></span>
            </div>
        </div>

        {{-- Card Slider --}}
        <div class="flex md:hidden gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth px-4">
            @foreach(range(1, 4) as $i)
            <x-article
                image="https://picsum.photos/id/101{{ $i }}/400/250"
                tag="Teknologi"
                time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
            />
            @endforeach
        </div>

        {{-- Card --}}
        <div class="hidden md:grid grid-cols-3 gap-4 mt-6 px-24 place-items-center place-content-center">
            @foreach(range(1, 4) as $i)
            <x-article
                image="https://picsum.photos/id/101{{ $i }}/400/250"
                tag="Teknologi"
                time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..."
            />
            @endforeach
        </div>

        <div class="flex justify-center mt-4">
            <a href="#" class="capitalize flex items-center text-sm md:text-md bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Lihat Artikel Lainnya <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    {{-- Article End --}}

</x-app-layout>
