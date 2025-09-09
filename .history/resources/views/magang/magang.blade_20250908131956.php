<x-app-layout>
    {{-- Section 1 --}}
        <div class="inline-block w-full h-[12vh]">
        </div>
        <div class="relative overflow-hidden w-full h-[40vh]">
            <img 
            src="{{ asset('assets/topbg.svg') }}" 
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="relative flex flex-col items-center justify-center h-full space-y-2">
                <div class="text-white font-bold text-4xl text-center capitalize">
                    <h1>Lorem ipsum dolor <br> sit amet consectetur</h1>
                </div>

                <div class="text-lg text-[#81ACAD]">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum repellat iusto? Deleniti, facere nemo?
                    </p>
                </div>
            </div>
        </div>
    {{-- Section 1 --}}

    {{-- Section 2 --}}
        <div class="w-full flex flex-col justify-center items-center pt-12">
            <div class="flex justify-between items-end w-4/5">
               <div class="space-y-2">
                    <div class="text-primary capitalize font-bold text-3xl">
                        <h1>magang dalam negeri</h1>
                    </div>

                    <div class="text-black font-semibold text-xl">
                        <h2>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </h2>
                    </div>

                    <div class="text-darkoff font-medium max-w-2xl">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consectetur nihil nobis quibusdam tempora voluptates. Praesentium totam debitis quaerat optio.</p>
                    </div>
               </div>

               <div class="underline text-primary capitalize mr-6">
                    <a href="">lihat lebih banyak</a>
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

    {{-- Section 3 --}}
        <div class="w-full flex items-center justify-center h-fit">
            <div class="w-4/5">
                <div class="absolute px-12 py-8 space-y-8">
                    <div class="text-white text-4xl font-bold text-pretty-3 w-full max-w-sm">
                        <h1>Berikan inovasi baru
                        untuk calon ahli
                        berpotensi</h1>
                    </div>

                    <div class="w-full max-w-xs text-lightoff">
                        <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis</p>
                    </div>

                    <div class="bg-secondary w-fit max-w-sm flex justify-center items-center text-white px-4 py-2 rounded-md border border-secondary hover:bg-transparent hover:text-secondary transition-all ">
                        <a href="">Daftar Sebagai Penyelenggara</a>
                    </div>
                </div>

                <img src="{{ asset('assets/magangcta.svg') }}" 
                    alt=""
                    class="inset-0 w-full h-full object-cover"
                >

            </div>
        </div>
    {{-- Section 3 --}}

    {{-- Section 4 --}}
        <div class="w-full">
            <div class="flex w-full px-4"> 
                <div class="space-y-2 w-4/5 max-w-2xl">
                <div class="text-primary text-4xl capitalize font-bold">
                    <h1>Testimoni alumni magang</h1>
                </div>

                <div class="text-md">
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
    
</x-app-layout>

