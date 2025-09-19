<x-app-layout class="w-full scroll-smooth">
    {{-- Top Mobile --}}
            <div class="flex items-center lg:hidden w-full py-4 px-6 justify-between">
                <div class="flex items-center">
                    <img class="w-2/3" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                 @auth
                                        <x-modal name="logout-modal" maxWidth="sm" :show="$errors->logout->isNotEmpty()" focusable @class(['rounded-full'])>
                                          <div class="w-full flex justify-center items-center pt-6 mb-10">
                                              <div class="py-7 px-6 w-fit bg-black text-white text-6xl rounded-full">
                                                <i class="fa-solid fa-door-open"></i>
                                            </div>
                                          </div>

                                          <div class="w-full flex justify-center items-center text-xl text-center text-pretty font-medium px-4 mb-4">
                                            <h1>
                                              Anda akan keluar dari sesi pengguna aktif
                                            </h1>
                                          </div>

                                          <form method="POST" class="mb-4" action="{{ route('logout') }}">
                                        @csrf
                                       <div class="flex justify-center items-center w-full px-12">
                                            <h1
                                              x-on:click.prevent="$dispatch('close-modal', 'logout-modal')"
                                              class="flex items-center justify-center text-red-600 bg-transparent border border-red-600 px-6 py-1 hover:bg-red-600 hover:text-white rounded-md w-full">
                                              Batal
                                            </h1>
                                       </div>
                                            <x-dropdown-link class="flex justify-center items-center w-full" :href="route('logout')" 
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                            <h1 class="flex items-center justify-center text-white bg-red-600 border border-red-600 px-[5.7rem] py-2 hover:bg-transparent hover:text-red-600 rounded-md w-fit">Keluar Sekarang</h1>
                                        </x-dropdown-link>
                                    </form>
                                        </x-modal>
                                    @endauth

                @auth
                    <div class="lg:hidden pr-6">
                <x-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                        <x-dropdown-link class="text-darkoff gap-4 border-b border-gray-300 mb-2 space-y-2" :href="route('profile.edit')">
                                            <i class="fa-solid fa-user"></i>
                                        {{ __('Profile') }}

                                      <div class="gap-2 divide-x-2 flex text-xs text-darkoff">
                                      <div>
                                          <h1>
                                            1 Pelajaran Diikuti
                                          </h1>
                                      </div>
                                      <div class="pl-2">
                                          <h1>
                                            2 Kelas Diikuti
                                          </h1>
                                      </div>
                                    </div>
                                    </x-dropdown-link>

                                    <div class="border-b border-gray-300 mb-2 px-4 py-2">
                                      <div class=" text-darkoff hover:text-primary">
                                        <a href="{{ route('dashboard') }}">Beranda</a>
                                      </div>
                                      <div class=" text-darkoff hover:text-primary">
                                        <a href="{{ route('pelatihan') }}">Kelas</a>
                                      </div>
                                    </div>

                                    <!-- Authentication -->

                                    <button
                                    class="w-full"
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'logout-modal')">
                                        @csrf
                                            <x-dropdown-link class="text-red-700 gap-4">
                                                <i class="fa-solid fa-power-off text-sm"></i>
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </button> 
                                </x-slot>
                            </x-dropdown>
            </div>
                @else
                <div class="flex items-center justify-end w-1/3">
                                    <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">
                                        Masuk
                                    </a>
                            </div>
                @endauth
                </div>

    <!-- Hero -->
    <section id="beranda" class="flex items-center h-fit md:h-[100vh] w-full font-jakarta bg-milk">
        <!-- Left Side -->
        <div
<<<<<<< HEAD
            class="h-full flex flex-col justify-center items-center md:items-start lg:items-start w-full py-12 md:w-1/2 md:pt-26 md:pl-6 lg:pl-12 space-y-12">
=======
            class="h-full flex flex-col justify-center items-center md:items-start lg:items-start w-full px-6 py-6 md:py-12 md:w-1/2 md:pt-26 lg:px-12 space-y-12">
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
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
                    <p class="text-sm lg:text-base text-center md:text-start font-jakarta font-medium text-darkoff px-7 md:px-0 lg:pr-8">The
                        standard chunk of Lorem Ipsum
                        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from
                        "de Finibus Bonorum et Malorum".</p>
                </div>
            </div>
            <!-- Hero text -->

            <!-- Button -->
            <div class=" md:flex justify-between items-center place-items-center gap-6">
                <div class="md:flex flex-row gap-6">
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
        <div class="hidden md:flex flex-col justify-end mt-40 px-12 lg:px-20 w-1/2 h-[50vh]">
            <!-- Image -->
            <div class="w-full h-full flex">
                <img class="w-full h-5/6 shadow-solid-teal rounded-md" src="https://picsum.photos/id/0/200/300"
                    alt="">
            </div>
            <div class="bg-white w-fit h-fit px-4 py-2 shadow-lg absolute top-36 lg:top-40 right-4 lg:right-10 rounded-md">
                <h1 class="text-lg lg:text-xl">Lorem Ipsum</h1>
                <p class="text-sm lg:text-base">Lorem ipsum dolor sit amet.</p>
            </div>
            <!-- Image End -->

            <!-- Stats -->
            <div class="grid grid-cols-4 gap-2 font-jakarta w-full">
                <!-- Single Stats -->
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-xs text-center lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-xs text-center lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-xs text-center lg:text-base">Lorem Ipsum</h2>
                </div>
                <div class="flex col-span-1 flex-col place-items-center">
                    <h1 class="text-primary font-extrabold text-xl">500+</h1>
                    <h2 class="font-semibold text-xs text-center lg:text-base">Lorem Ipsum</h2>
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

            <p class="text-sm md:text-base font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
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
<<<<<<< HEAD
        class="h-fit px-4 md:px-6 py-12 w-full flex flex-col space-y-12 justify-center items-center bg-white">
=======
        class="h-fit px-4 md:px-6 py-12 w-full flex flex-col space-y-12 justify-center items-center bg-milk border">
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
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

            <p class="text-sm md:text-base font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
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
            <a href="{{ route('pelatihan') }}"
                class="capitalize flex items-center text-sm md:text-md bg-primary border border-primary px-4 py-2 rounded-md text-white hover:bg-transparent hover:text-primary hover:border transition">
                Pelajari lebih lanjut <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

    </section>
    <!-- Pelatihan Unggulan End -->

    {{-- Kata Pengguna --}}
    <section id="katapengguna" class="md:flex flex-col w-full h-auto space-y-12 py-12 md:mb-12 bg-milk">
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

<<<<<<< HEAD
            <p class="text-sm md:text-base font-medium text-gray-500 mt-4 px-3 md:px-0 text-center md:text-center">
=======
            <p class="text-sm md:text-base lg:text-lg font-medium text-gray-500 mt-4 px-8 md:px-6 text-center md:text-center">
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
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
        class="flex flex-col w-full h-fit py-12 pb-12 md:pb-8 space-y-6 md:space-y-12 md:my-20 md:px-12 px-4 bg-milk ">
        <!-- Title -->
        <div class="flex flex-col place-items-center justify-center md:block gap-2 px-4 md:px-12">
            <div class="capitalize flex place-items-center w-full items-center justify-center gap-4">
                <!-- Desktop Heading -->
                <h1 class="text-4xl font-bold hidden w-fit md:block">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    Artikel kami
                    
                </h1>

                <!-- Mobile Heading -->
                <h1 class="capitalize font-bold text-2xl flex items-center gap-2 md:hidden">
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                    artikel kami
                    <i class="fa-solid fa-star-of-life text-secondary"></i>
                </h1>

                <div class="hidden md:block w-1/2 h-[1px] bg-secondary"></div>
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

        {{-- Card Large --}}
        <div class="hidden md:block">
            <div class="hidden md:grid grid-cols-3 gap-4 mt-6 px-3 place-items-center place-content-center">
                <x-article image="https://picsum.photos/id/1011/400/250" tag="Teknologi" time="2 Jam yang lalu"
                    title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
                <x-article image="https://picsum.photos/id/1015/400/250" tag="Teknologi" time="2 Jam yang lalu"
                    title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..." />
                <x-article image="https://picsum.photos/id/1016/400/250" tag="Teknologi" time="2 Jam yang lalu"
                    title="Lorem Ipsum Dolor Sit Amet Consectetur desplicit Elit Oryza Sativa"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry..."/>
            </div>
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
