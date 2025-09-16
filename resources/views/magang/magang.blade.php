<x-app-layout>
    {{-- Mobile Top --}}
    <div class="flex items-center lg:hidden w-full py-4 px-6">
                <div class="flex items-center">
                    <img class="w-2/3" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                @auth
                    <div class="lg:hidden pr-6">
                <x-dropdown align="right" width="48">
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
                            <x-dropdown-link class="text-darkoff gap-4" :href="route('profile.edit')">
                                <i class="fa-solid fa-user"></i>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-dropdown-link class="text-red-700 gap-4" :href="route('logout')" 
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa-solid fa-power-off text-sm"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endauth
                        
                    </x-slot>
                </x-dropdown>
            </div>
                @else
                <div class="flex items-center justify-end w-1/3 pr-6">
                                    <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">
                                        Masuk
                                    </a>
                            </div>
                @endauth
        </div>

    {{-- Section 1 --}}
        <div class="hidden lg:inline-block w-full h-[12vh]">
        </div>
        <div class="relative overflow-hidden px-6 w-full h-[40vh]">
            <img 
            src="{{ asset('assets/topbg.svg') }}" 
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="relative flex flex-col items-center justify-center h-full space-y-2">
                <div class="text-white font-bold text-2xl lg:text-4xl text-center capitalize">
                    <h1>Lorem ipsum dolor <br> sit amet consectetur</h1>
                </div>

                <div class="text-sm text-center lg:text-lg text-[#81ACAD]">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum repellat iusto? Deleniti, facere nemo?
                    </p>
                </div>
            </div>
        </div>
    {{-- Section 1 --}}

    {{-- Section 2 --}}
        <div class="w-full flex flex-col justify-center items-center pt-6 lg:pt-12">
            <div class="flex lg:justify-between items-end w-4/5">
               <div class="space-y-2">
                    <div class="text-primary capitalize font-bold text-xl lg:text-3xl text-center lg:text-start">
                        <h1>magang dalam negeri</h1>
                    </div>

                    <div class="text-black font-semibold text-sm lg:text-xl text-center lg:text-start">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </h2>
                    </div>

                    <div class="text-darkoff text-xs lg:text-medium font-medium max-w-2xl text-center lg:text-start">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consectetur nihil nobis quibusdam tempora voluptates. Praesentium totam debitis quaerat optio.</p>
                    </div>
               </div>

               <div class="hidden lg:block underline text-primary capitalize mr-6">
                    <a href="{{ 'detail-magang' }}">lihat lebih banyak</a>
               </div>
            </div>

            <div class="relative w-4/5 flex justify-center items-center mx-auto py-6">
        <div class="swiper magangSwiper gap-6 px-6">
            <div class="swiper-wrapper gap-6">
                @foreach (range(1,10) as $item)
                    <div class="swiper-slide">
                        <x-card-magang 
                            logo="{{ asset('assets/logo/logo-wika.svg') }}"
                            jobdesk="Petani"
                            perusahaan="PT Sinar Jaya"
                            lokasi="Tambun"
                            tanggalHabis="10 Mei 2025"
                        />
                    </div>
                @endforeach
            </div>
        </div>

             <!-- Prev Button -->
            <button 
            class="swiper-button-prev -ml-[2.4rem] lg:-ml-12 absolute top-1/2 -translate-y-1/2 
                    bg-white p-3 rounded-full shadow hover:bg-teal-100 
                    [&::after]:hidden">
                <i class="fa-solid fa-chevron-left text-teal-600"></i>
            </button>

            <!-- Next Button -->
            <button 
            class="swiper-button-next -mr-[2.4rem] lg:-mr-6 absolute top-1/2 -translate-y-1/2
                    bg-white p-3 rounded-full shadow hover:bg-teal-100 
                    [&::after]:hidden">
                <i class="fa-solid fa-chevron-right text-teal-600"></i>
            </button>
            </div>
        </div>
    {{-- Section 2 --}}

    {{-- Section 3 --}}
        <div class="w-full flex items-center justify-center h-fit rounded-md">
            <div class="w-full h-[30vh] lg:h-fit lg:w-4/5">
                <div class="absolute px-12 py-8 space-y-3 lg:space-y-8">
                    <div class="text-white text-md lg:text-4xl font-bold text-pretty-3 w-full max-w-sm">
                        <h1>Berikan inovasi baru
                        untuk calon ahli
                        berpotensi</h1>
                    </div>

                    <div class="text-xs lg:text-md w-full max-w-xs text-lightoff">
                        <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis</p>
                    </div>

                    <div class="bg-secondary w-fit max-w-sm flex justify-center items-center text-white text-xs lg:text-md px-2 py-1 lg:px-4 lg:py-2 rounded-md border border-secondary hover:bg-transparent hover:text-secondary transition-all ">
                        <a href="">Daftar Sebagai Penyelenggara</a>
                    </div>
                </div>

                <img src="{{ asset('assets/magang-bg.svg') }}" 
                    alt=""
                    class="inset-0 w-full h-full object-cover lg:rounded-lg"
                >

            </div>
        </div>
    {{-- Section 3 --}}

    {{-- Section 4 --}}
        <div class="w-full pt-6 lg:py-12">
            <div class="flex w-full px-6 lg:px-40"> 
                <div class="space-y-2 w-full lg:w-4/5 max-w-2xl">
                <div class="text-primary text-xl lg:text-4xl capitalize text-center lg:text-start text-nowrap font-bold">
                    <h1>Testimoni alumni magang</h1>
                </div>

                <div class="text-xs text-center lg:text-start lg:text-md">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente consectetur, autem iusto ducimus expedita dicta omnis velit tenetur dolore maiores.</p>
                </div>
            </div>
            </div>

             <div class="overflow-hidden relative w-full bg-transparent py-6">
            <div class="flex flex-row animate-marquee20 space-x-3 w-max">
                @foreach([1,2,3,4] as $i)
                <x-comment-card
                    username="User {{ $i }}"
                    status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec vestibulum risus. Ut bibendum congue lacus sed ultrices. Aenean ut risus nulla. In fermentum, eros non euismod dignissim, eros velit posuere ligula, non finibus nulla nisl eget orci. Vestibulum vitae auctor elit, in sagittis felis."
                />
                @endforeach

                {{-- Duplicate biar seamless looping --}}
                @foreach([1,2,3,4] as $i)
                <x-comment-card
                    username="User {{ $i }}"
                    status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec vestibulum risus. Ut bibendum congue lacus sed ultrices. Aenean ut risus nulla. In fermentum, eros non euismod dignissim, eros velit posuere ligula, non finibus nulla nisl eget orci. Vestibulum vitae auctor elit, in sagittis felis."
                />
                @endforeach
            </div>
            </div>
        </div>
    {{-- Section 4 --}}

    {{-- Section 5 --}}
        <div class="mb-12 md:mb-20 relative overflow-hidden px-6 w-full h-fit md:h-[50vh]">
            <img src="{{ asset('assets/magang-bg-2.svg') }}" 
                alt="Magang Background 2"
                class="absolute w-full h-full object-cover inset-0">

            <div class="relative h-full block md:flex justify-between">
                <div class="md:px-12 text-pretty py-8 h-fit md:h-full flex items-center w-full md:max-w-md">
                    <h1 class="text-white font-medium text-md md:text-xl lg:text-4xl">
                        <span class="font-bold">Jutaan</span> peserta telah terdaftar dan juga meningkatkan keterampilannya
                    </h1>
                </div>

                <div class="w-full h-full flex flex-col justify-start md:justify-center max-w-2xl text-white text-md lg:text-xl mb-6 md:mb-0">
                    <div class="relative h-fit mb-2">
                        <span class="inline-block bg-white w-10 h-10 md:w-15 md:h-15 lg:w-20 lg:h-20 rounded-full"></span>
                        <img src="{{ asset('assets/coma.svg') }}" 
                            alt="Word"
                            class="size-[50%] lg:size-[45%] absolute top-[40%] -left-[14%] md:top-[50%] md:right-[87%]">
                    </div>

                    <div class="text-xs md:text-md lg:text-xl mb-4 text-pretty">
                        <p>
                            Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </p>
                    </div>

                    <div class="flex justify-between items-center pr-12">
                        <div class="font-semibold block">
                            <div>
                                <h1>Jonathan Hill</h1>
                            </div>

                            <div>
                                <h3>Lorem Ipsum Dolor</h3>
                            </div>
                        </div>

                        <div class="flex gap-1 items-center">
                            <div class="bg-white border border-white hover:bg-transparent hover:text-white transition-all flex items-center justify-center text-primary lg:text-2xl font-semibold h-fit w-[2rem] lg:w-[2.5rem] p-2 rounded-full">
                                <i class="fa-regular fa-chevron-left"></i>
                            </div>
                            <div class="bg-white border border-white hover:bg-transparent hover:text-white transition-all flex items-center justify-center text-primary lg:text-2xl font-semibold h-fit w-[2rem] lg:w-[2.5rem] p-2 rounded-full">
                                <i class="fa-regular fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Section 5 --}}

    {{-- Section 6 --}}
        <div class="relative overflow-hidden px-6 w-full h-fit md:h-[80vh]">
            <div>
                <img src="{{ asset('assets/magang-bg-3.svg') }}" 
                    alt=""
                    class="absolute object-cover w-full h-full inset-0">
            </div>

            <div class="relative w-full h-full flex items-center lg:px-20">
                <div class="w-full md:w-1/2 h-fit lg:h-1/2 flex flex-col space-y-6 py-6 lg:py-0 lg:justify-between">
                    <div class="text-xl lg:text-4xl font-bold text-white">
                        <h1>
                            Persiapkan karir masa <br> depan dari sekarang
                        </h1>
                    </div>

                    <div class="text-white">
                        <p>
                            Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        </p>
                    </div>

                    <div>
                        <a href="{{ route('detail-magang') }}"
                            class="bg-secondary px-4 py-2 text-white rounded-md font-medium text-sm lg:text-xl">
                            Jelajahi Lowongan Magang
                        </a>
                    </div>

                    <div class="flex gap-8 text-white text-[10px] lg:text-md">
                        <div>
                            <h1><i class="fa-regular fa-circle-check mr-1 lg:mr-2"></i> Proses pendaftaran Mudah</h1>
                        </div>
                        <div>
                            <h1><i class="fa-regular fa-circle-check mr-1 lg:mr-2"></i> Dapatkan Sertifikat Magang Resmi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Section 6 --}}
    
</x-app-layout>

