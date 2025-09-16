<x-app-layout class="w-full scroll-smooth">
    <!-- Hero -->
    <section id="beranda" class="flex items-center h-fit md:h-[100vh] w-full font-jakarta bg-milk">
        <!-- Left Side -->
        <div
            class="h-full flex flex-col justify-center items-center md:items-start lg:items-start w-full px-6 py-12 md:w-1/2 md:pt-26 lg:px-12 space-y-12">
            <!-- Hero text -->
            <div class="space-y-6 mt-0 md:mt-32">
                <div class="w-full flex flex-col place-items-center md:place-items-start md:space-y-2">
                    <h1 class="text-primary text-2xl font-bold text-center md:text-start md:text-5xl lg:text-7xl">
                        Lorem Ipsum
                    </h1>
                    <h2
                        class="text-black text-lg font-semibold line-clamp-2 text-center 
                    md:text-start md:text-4xl lg:text-6xl">
                        Dolor sit amet Consectetur Elit</h2>
                </div>

                <div>
                    <p class="text-sm md:text-base text-center md:text-start font-jakarta font-medium text-darkoff">The
                        standard chunk of Lorem Ipsum
                        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from
                        "de Finibus Bonorum et Malorum".</p>
                </div>
            </div>
            <!-- Hero text -->

            <!-- Button -->
            <div class=" md:flex justify-between items-center place-items-center gap-6">
                <div class="md:flex flex-row gap-3">
                    <a class="w-fit col-span-1 bg-primary border-2 font-semibold border-primary hover:bg-transparent hover:text-primary hover:border-primary transition text-white rounded-md py-2 px-6 text-md md:text-md lg:text-xl"
                        href="">Lorem Ipsum</a>

                    <div class="hidden md:flex place-items-center">
                        <h1 class="w-full col-span-1 text-sm md:text-xs lg:text-base font-medium">Lorem ipsum dolor
                            </br> sit amet.</h1>
                    </div>
                </div>

                <div>
                    <a class="hidden md:block col-span-1 bg-primary border border-primary hover:bg-transparent hover:text-primary transition px-3 py-2 text-white rounded-full text-xl font-bold"
                        href="#program"><i class="fa-solid fa-arrow-down-long"></i></a>
                </div>
            </div>
            <!-- Button -->
        </div>
        <!-- Left Side -->

        <!-- Right Side -->
        <div class="hidden md:flex flex-col justify-end mt-40 px-20 w-1/2 h-[50vh]">
            <!-- Image -->
            <div class="w-full h-full flex">
                <img class="w-full h-5/6 shadow-solid-teal rounded-md" src="https://picsum.photos/id/0/200/300"
                    alt="">
            </div>
            <div class="bg-white w-fit h-fit px-4 py-2 shadow-lg absolute top-36 lg:top-40 right-10 rounded-md">
                <h1 class="text-lg lg:text-xl">Lorem Ipsum</h1>
                <p class="text-sm lg:text-base">Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- Image End -->

            <!-- Stats -->
            <div class="grid grid-cols-4 gap-2 font-jakarta">
                <!-- Single Stats -->
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-sm lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-sm lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-sm lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-sm lg:text-base">Lorem Ipsum</h2>
                </div>
                <!-- Single Stats End -->
            </div>
            <!-- Stats End -->
        </div>
        <!-- Right Side -->
        </div>
    </section>
    <!-- Hero End -->

    <!-- infinity Carousel -->
    <div class="overflow-hidden relative w-full bg-white py-4 ">
        <div class="flex animate-marquee space-x-6 justify-center items-center">
            @foreach (['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-wika.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                <img src="{{ asset('assets/logo/' . $logo) }}" class="h-16 object-contain" alt="sponsor">
                <i class="fa-solid fa-star-of-life text-2xl text-primary"></i>
            @endforeach

            @foreach (['logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-denso.svg', 'logo-kirana.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-telkom.svg', 'logo-wika.svg'] as $logo)
                <img src="{{ asset('assets/logo/' . $logo) }}" class="h-16 object-contain" alt="sponsor">
                <i class="fa-solid fa-star-of-life text-2xl text-primary"></i>
            @endforeach
        </div>
    </div>
    <!-- infinity Carousel End -->

    <!-- Program Kejuruan -->
    <section id="kejuruan"
        class="h-fit w-full px-4 md:px-6 py-12 flex flex-col space-y-12 justify-center items-center bg-milk">
        <!-- Text -->
        <div class="flex flex-col place-items-center md:block gap-2 md:px-12">
            <div class="capitalize flex place-items-center w-full items-center justify-center gap-4">
                <!-- Desktop Heading -->
                <h1 class="text-4xl font-bold hidden md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    program kejuruan kami
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>

                <!-- Mobile Heading -->
                <h1 class="capitalize font-bold text-2xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    program kejuruan
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
            </div>

            <p class="text-sm md:text-base lg:text-lg font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus.
                <br class="hidden md:hidden lg:block">
                Maecenas lacus dui, porta eu ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut,
                lobortis aliquet orci.
            </p>
        </div>


        <!-- Swiper -->

        <!-- Custom Buttons -->
        <div class="relative w-2/3 mx-auto py-6">
            <!-- Slider -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($majors as $major)
                        <div class="swiper-slide w-fit">
                            <div class="flex justify-center items-center mb-4">
                                <img class="fill-primary stroke-primary h-20 w-auto "
                                    src="{{ asset('storage/' . $major->svg_icon) }}" />
                            </div>
                            <p class="text-base text-center font-semibold">{{ $major->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Prev Button -->
            <button
                class="custom-prev absolute top-1/2 -translate-y-1/2 -left-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
                <i class="fa-solid fa-chevron-left text-teal-600"></i>
            </button>

            <!-- Next Button -->
            <button
                class="custom-next absolute top-1/2 -translate-y-1/2 -right-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
                <i class="fa-solid fa-chevron-right text-teal-600"></i>
            </button>
        </div>

        <div class="flex justify-center mt-4">
            <a href="#"
                class="capitalize flex items-center bg-primary border border-primary text-sm md:text-base px-3 py-2 md:px-4 md:py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Lihat seluruh kejuruan <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    <!-- Program Kejuruan End -->

    <!-- Pelatihan Unggulan -->
    <section id="pelatihan"
        class="h-fit px-4 md:px-6 py-12 w-full flex flex-col space-y-12 justify-center items-center bg-white border">
        <!-- Title -->
        <div class="flex flex-col place-items-center md:block gap-2 md:px-12">
            <div class="capitalize flex place-items-center w-full items-center justify-center gap-4">
                <!-- Desktop Heading -->
                <h1 class="text-4xl font-bold hidden md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    pelatihan unggulan kami
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>

                <!-- Mobile Heading -->
                <h1 class="capitalize font-bold text-2xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    pelatihan unggulan
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
            </div>

            <p class="text-sm md:text-base lg:text-lg font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus.
                <br class="hidden md:hidden lg:block">
                Maecenas lacus dui, porta eu ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut,
                lobortis aliquet orci.
            </p>
        </div>


        <div class="flex flex-wrap justify-center items-center gap-3 w-full px-12 md:px-2">
            {{-- Card --}}
            @forelse ($topTrainings->take(3) as $training)
                <x-card :training="$training" />
            @empty
                <p class="text-center text-lg text-red-500">
                    Terjadi kesalahan saat mengambil data pelatihan unggulan. Silahkan coba lagi nanti.
                </p>
            @endforelse

        </div>

        <div class="flex justify-center mt-4">
            <a href="#"
                class="capitalize flex items-center text-sm md:text-base bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Pelajari lebih lanjut <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

    </section>
    <!-- Pelatihan Unggulan End -->

    {{-- Kata Pengguna --}}
    <section id="katapengguna" class="md:flex flex-col w-full h-auto space-y-12 py-12 px-4 md:px-6 md:mb-12 bg-milk">
        <!-- Title -->
        <div class="flex flex-col place-items-center md:block gap-2 md:px-12">
            <div class="capitalize flex place-items-center w-full items-center justify-center gap-4">
                <!-- Desktop Heading -->
                <h1 class="text-4xl font-bold hidden md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    apa kata pengguna kami?
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>

                <!-- Mobile Heading -->
                <h1 class="capitalize font-bold text-2xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    apa kata pengguna?
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
            </div>

            <p class="text-sm md:text-base lg:text-lg font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus eu ante nec luctus.
                <br class="hidden md:hidden lg:block">
                Maecenas lacus dui, porta eu ullamcorper eget, dignissim at elit. Ut lorem risus, volutpat a risus ut,
                lobortis aliquet orci.
            </p>
        </div>

        <!-- Mobile: Auto-Slide Carousel -->
        <!-- Card Carousel Infinity -->
        <div class="overflow-hidden md:hidden relative w-full bg-transparent py-6">
            <div class="flex flex-row animate-marquee20 space-x-3 w-max">
                @foreach ([1, 2, 3, 4] as $i)
                    <x-comment-card username="User {{ $i }}" status="Designer at Google"
                        comment="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec vestibulum risus. Ut bibendum congue lacus sed ultrices. Aenean ut risus nulla. In fermentum, eros non euismod dignissim, eros velit posuere ligula, non finibus nulla nisl eget orci. Vestibulum vitae auctor elit, in sagittis felis." />
                @endforeach

                {{-- Duplicate biar seamless looping --}}
                @foreach ([1, 2, 3, 4] as $i)
                    <x-comment-card username="User {{ $i }}" status="Designer at Google"
                        comment="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec vestibulum risus. Ut bibendum congue lacus sed ultrices. Aenean ut risus nulla. In fermentum, eros non euismod dignissim, eros velit posuere ligula, non finibus nulla nisl eget orci. Vestibulum vitae auctor elit, in sagittis felis." />
                @endforeach
            </div>
        </div>


        <!-- Desktop: Grid -->
        <div class="hidden md:grid grid-cols-2 px-12 lg:px-32 gap-4 mt-6 place-items-center place-content-center">
            @foreach ([1, 2, 3, 4] as $i)
                <x-comment-card username="User {{ $i }}" status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec vestibulum risus. Ut bibendum congue lacus sed ultrices. Aenean ut risus nulla. In fermentum, eros non euismod dignissim, eros velit posuere ligula, non finibus nulla nisl eget orci. Vestibulum vitae auctor elit, in sagittis felis." />
            @endforeach
        </div>
    </section>
    {{-- Kata Pengguna End --}}

    {{-- CTA --}}
    <section class="w-full md:h-[60vh] lg:h-[70vh] my-8 px-12 hidden md:flex justify-center items-center">
        <div class="w-full h-full rounded-2xl px-12 lg:px-24 space-y-6 lg:space-y-8 flex flex-col justify-center"
            style="background-image: url('assets/backgroundCTA.png'); background-size: cover; object-fit: cover;">
            {{-- Title --}}
            <div>
                <h1 class="lg:text-6xl text-4xl text-white font-bold">Lorem Ipsum Dolor <br> Sit Amet Conse.</h1>
            </div>

            {{-- Desc --}}
            <div class="max-w-xl text-white text-sm lg:text-base">
                Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                himenaeos.
            </div>

            {{-- Button --}}
            <div class="flex gap-6">
                <div>
                    <a class="px-4 py-2 bg-secondary border border-secondary rounded-lg text-white hover:bg-transparent transition-all"
                        href="">Ikuti Pelatihan</a>
                </div>
                <div>
                    <a class="px-4 py-2 bg-secondary border border-secondary rounded-lg text-white hover:bg-transparent transition-all"
                        href="">Jelajahi Lowongan Magang</a>
                </div>
            </div>

            {{-- Info --}}
            <div class="flex gap-6">
                <div>
                    <h2 class="capitalize text-white"><i class="fa-regular fa-circle-check"></i> Proses pendaftaran
                        mudah</h2>
                </div>
                <div>
                    <h2 class="capitalize text-white"><i class="fa-regular fa-circle-check"></i> Proses pendaftaran
                        mudah</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- CTA End --}}

    {{-- Article --}}
    <section
        class="flex flex-col w-full h-fit py-12 pb-12 md:pb-8 space-y-6 md:space-y-12 md:my-20 md:px-12  bg-milk ">
        <!-- Title -->
        <div class="flex flex-col place-items-center md:block gap-2 md:px-12">
            <div class="capitalize flex place-items-center w-full items-center justify-center gap-4">
                <!-- Desktop Heading -->
                <h1 class="text-4xl font-bold hidden md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    Artikel kami
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>

                <!-- Mobile Heading -->
                <h1 class="capitalize font-bold text-2xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    artikel kami
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>
            </div>
        </div>

        {{-- Card Slider --}}
        <div class="flex md:hidden gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth px-4">
            <x-article image="https://picsum.photos/id/1011/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            <x-article image="https://picsum.photos/id/1015/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            <x-article image="https://picsum.photos/id/1016/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            <x-article image="https://picsum.photos/id/1016/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            {{-- Tambah card lainnya --}}
        </div>

        {{-- Card --}}
        <div class="hidden md:grid grid-cols-3 gap-4 mt-6 px-3 place-items-center place-content-center">
            <x-article image="https://picsum.photos/id/1011/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            <x-article image="https://picsum.photos/id/1015/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
            <x-article image="https://picsum.photos/id/1016/400/250" tag="Teknologi" time="2 Jam yang lalu"
                title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
        </div>
        {{-- Card --}}

        <div class="flex justify-center mt-4">
            <a href="#"
                class="capitalize flex items-center text-sm md:text-md bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Lihat Artikel Lainnya <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>
    {{-- Article End --}}

</x-app-layout>
