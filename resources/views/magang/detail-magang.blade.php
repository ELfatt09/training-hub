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

    <div id="contact-modal" tabindex="-1" aria-hidden="true"
                            class="hidden fixed inset-0 z-modal flex items-center justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  
                                <div class="relative p-4 w-full max-w-md">
                                    <div class="relative z-50 bg-white rounded-lg shadow dark:bg-gray-700">
                                       <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                Kontak Perusahaan
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="contact-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, possimus?</p>
                                            <ul class="my-4 space-y-3">
                                                <li>
                                                    <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                        <i class="fa-solid fa-envelope mr-2 text-secondary"></i> Gmail
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                        <i class="fa-brands fa-whatsapp mr-2 text-secondary"></i> Whatsapp
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                        <i class="fa-brands fa-linkedin mr-2 text-secondary"></i> LinkedIn
                                                    </a>
                                                </li>
                                            </ul>
                                            <div>
                                                <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                                                    <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </div>

    {{-- Section 1: Hero --}}
    <div class="hidden md:!inline-block w-full h-[12vh]"></div>
    <div class="relative overflow-hidden w-full h-[30vh] md:h-[40vh]">
        <img 
            src="{{ asset('assets/topbg.svg') }}" 
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
        >

        <div class="relative flex flex-col items-center justify-center h-full space-y-2">
            <div class="text-white font-bold text-xl md:text-4xl text-center capitalize">
                <h1>Lorem ipsum dolor <br> sit amet consectetur</h1>
            </div>

            <div class="text-center px-6 text-sm md:text-lg text-[#81ACAD]">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum repellat iusto? Deleniti, facere nemo?
                </p>
            </div>

            <form class="relative focus:outline-none focus:ring-0 focus:border-none gap-4 w-full flex justify-center items-center pt-4 px-4 text-xs md:text-md md:px-0" action="">
                <input placeholder="Temukan Tempat Magang..." 
                       type="text"
                       class="w-1/3 lg:w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD] text-xs md:text-lg">

                <select class="w-1/3 lg:w-1/5 border border-lightoff rounded-md bg-transparent text-[#81ACAD] placeholder-[#81ACAD] text-xs md:text-lg" name="" id="">
                    <option value="" disabled selected hidden>Klasifikasi...</option>
                    <option value="1">Klasifikasi 1</option>
                    <option value="2">Klasifikasi 2</option>
                    <option value="3">Klasifikasi 3</option>
                </select>

                <input placeholder="Masukkan Kota atau Wilayah..." 
                       type="text"
                       class="w-1/3 lg:w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD] text-xs md:text-lg focus:border-secondary focus:outline-secondary focus:ring-secondary">
            </form>
        </div>
    </div>
    {{-- End Section 1 --}}

    {{-- Section 2: Grid Tabs --}}
    <div class="flex flex-col place-items-center justify-center items-center lg:grid grid-cols-4 gap-6 p-6" id="magangTabs" data-tabs-toggle="#default-tab-content" role="tablist">
        <!-- Kiri: List Lowongan -->
        <div class="col-span-1 space-y-4 lg:pl-12">
            <button id="low1-tab" data-tabs-target="#low1" type="button" role="tab"
                aria-controls="low1" aria-selected="false"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 bg-white hover:bg-gray-50">
                <div class="w-full flex items-center justify-between">
                    <div>
                        <h3 class="text-teal-600 font-semibold text-sm">Magang Petani Terong</h3>
                        <p class="text-xs text-darkoff">Wika (PT. Lorem Ipsum Dolor)</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-20 h-20">
                    </div>
                </div>

                <div class="text-darkoff font-medium text-sm">
                    <div>
                        <h1>Jawa Barat, Bekasi, Tambun</h1>
                        <h1>Rp 500.000 - Rp 1.000.000,- / Bulan</h1>
                    </div>
                </div>

                <ul class="list-disc ml-4 text-sm text-darkoff">
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                </ul>

                <div class="text-darkoff text-xs">
                    <p>2 hari yang lalu</p>
                </div>
            </button>

            <button id="low2-tab" data-tabs-target="#low2" type="button" role="tab"
                aria-controls="low2" aria-selected="false"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 bg-white hover:bg-gray-50">
                <div class="w-full flex items-center justify-between">
                    <div>
                        <h3 class="text-teal-600 font-semibold text-sm">Magang Petani Terong</h3>
                        <p class="text-xs text-darkoff">Wika (PT. Lorem Ipsum Dolor)</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('assets/logo/logo-sinarmas.svg') }}" class="w-20 h-20">
                    </div>
                </div>

                <div class="text-darkoff font-medium text-sm">
                    <div>
                        <h1>Jawa Barat, Bekasi, Tambun</h1>
                        <h1>Rp 500.000 - Rp 1.000.000,- / Bulan</h1>
                    </div>
                </div>

                <ul class="list-disc ml-4 text-sm text-darkoff">
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                </ul>

                <div class="text-darkoff text-xs">
                    <p>2 hari yang lalu</p>
                </div>
            </button>

            <button id="low2-tab" data-tabs-target="#low2" type="button" role="tab"
                aria-controls="low2" aria-selected="false"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 bg-white hover:bg-gray-50">
                <div class="w-full flex items-center justify-between">
                    <div>
                        <h3 class="text-teal-600 font-semibold text-sm">Magang Petani Terong</h3>
                        <p class="text-xs text-darkoff">Wika (PT. Lorem Ipsum Dolor)</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('assets/logo/logo-sinarmas.svg') }}" class="w-20 h-20">
                    </div>
                </div>

                <div class="text-darkoff font-medium text-sm">
                    <div>
                        <h1>Jawa Barat, Bekasi, Tambun</h1>
                        <h1>Rp 500.000 - Rp 1.000.000,- / Bulan</h1>
                    </div>
                </div>

                <ul class="list-disc ml-4 text-sm text-darkoff">
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                </ul>

                <div class="text-darkoff text-xs">
                    <p>2 hari yang lalu</p>
                </div>
            </button>

            <button id="low2-tab" data-tabs-target="#low2" type="button" role="tab"
                aria-controls="low2" aria-selected="false"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 bg-white hover:bg-gray-50">
                <div class="w-full flex items-center justify-between">
                    <div>
                        <h3 class="text-teal-600 font-semibold text-sm">Magang Petani Terong</h3>
                        <p class="text-xs text-darkoff">Wika (PT. Lorem Ipsum Dolor)</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('assets/logo/logo-sinarmas.svg') }}" class="w-20 h-20">
                    </div>
                </div>

                <div class="text-darkoff font-medium text-sm">
                    <div>
                        <h1>Jawa Barat, Bekasi, Tambun</h1>
                        <h1>Rp 500.000 - Rp 1.000.000,- / Bulan</h1>
                    </div>
                </div>

                <ul class="list-disc ml-4 text-sm text-darkoff">
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                </ul>

                <div class="text-darkoff text-xs">
                    <p>2 hari yang lalu</p>
                </div>
            </button>

            <button id="low2-tab" data-tabs-target="#low2" type="button" role="tab"
                aria-controls="low2" aria-selected="false"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 bg-white hover:bg-gray-50">
                <div class="w-full flex items-center justify-between">
                    <div>
                        <h3 class="text-teal-600 font-semibold text-sm">Magang Petani Terong</h3>
                        <p class="text-xs text-darkoff">Wika (PT. Lorem Ipsum Dolor)</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('assets/logo/logo-sinarmas.svg') }}" class="w-20 h-20">
                    </div>
                </div>

                <div class="text-darkoff font-medium text-sm">
                    <div>
                        <h1>Jawa Barat, Bekasi, Tambun</h1>
                        <h1>Rp 500.000 - Rp 1.000.000,- / Bulan</h1>
                    </div>
                </div>

                <ul class="list-disc ml-4 text-sm text-darkoff">
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                    <li>
                        <h1>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora magni laudantium eius vitae, eos voluptatum.
                        </h1>
                    </li>
                </ul>

                <div class="text-darkoff text-xs">
                    <p>2 hari yang lalu</p>
                </div>
            </button>
        </div>

        <!-- Kanan: Detail -->
        <div class="hidden lg:block col-span-3 pr-12 h-full relative">
            <div id="default-tab-content" class="sticky top-28 h-[85vh] overflow-y-auto rounded-2xl bg-white shadow">
                <!-- Detail Low1 -->
                <div class="w-full h-[85vh] rounded-t-2xl overflow-y-scroll bg-white shadow" id="low1" role="tabpanel" aria-labelledby="low1-tab">
                    <img src="https://picsum.photos/800/300" class="rounded-none md:rounded-t-2xl mb-4 w-full" />
                    <div class="px-6 py-4 space-y-8">
                        <div class="flex items-center justify-between w-full">
                            <div class="block md:flex items-center gap-3">
                                <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-20 h-20" />
                                <div class="px-0 md:px-6">
                                    <h3 class="text-xl font-semibold text-teal-600">Magang Petani Terong</h3>
                                    <p class="text-gray-500">Wika (PT. Lorem Ipsum Dolor)</p>
                                </div>
                            </div>

                            <div class="flex gap-8 text-2xl text-primary">
                                <div>
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <div>
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                        </div>

                        <div class="pl-1 text-xl text-secondary font-medium">
                            <h1>
                                <i class="fa-solid fa-star"></i> <span class="text-sm text-darkoff">4.6</span> &middot; <span class="underline text-darkoff text-sm">100 Ulasan</span>
                            </h1>
                        </div>

                        <div>
                            <ul class="text-darkoff space-y-2 mb-4">
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    Jawa Barat, Bekasi, Tambun
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-map-pin"></i>
                                    </span>
                                    Ladang Terong dan Jagung
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    Full Time / Part Time
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </span>
                                    Rp 500.000 - Rp 1.000.000,- / Bulan
                                </li>
                            </ul>

                            <p class="text-xs text-secondary">
                                2 Hari Yang Lalu
                            </p>
                        </div>

                        <div class="flex gap-6">      
                            <button type="button" data-modal-target="contact-modal" data-modal-toggle="contact-modal" class="text-white !bg-secondary border border-secondary hover:!bg-transparent hover:text-secondary transition-all w-fit flex items-center justify-center rounded-md px-4 py-2">
                            <svg aria-hidden="true" class="w-4 h-4 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            Kontak Perusahaan
                            </button>
                        </div>  
                        
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio eius nulla cum qui delectus exercitationem earum enim quisquam velit dolorem iste non suscipit nemo aliquam deleniti, fugiat perspiciatis facere laudantium, recusandae repellat! Laudantium atque quis inventore totam dolores iusto voluptatum!
                            </p>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl"> 
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nostrum architecto debitis, ipsam neque nisi, quidem ullam suscipit ex, eligendi veritatis minus aperiam obcaecati? Fugiat qui, amet omnis quibusdam, nemo iste porro reprehenderit necessitatibus esse beatae consequuntur aperiam eaque nisi, consectetur doloribus. Doloribus numquam dolore soluta quis, omnis reiciendis. Esse officia temporibus eum quidem tempora reiciendis vitae obcaecati. Officiis iste ipsa optio molestiae voluptas accusantium? A quisquam cumque cum? Placeat quaerat fuga vero asperiores praesentium, repellat quisquam natus necessitatibus voluptatibus.
                                </p>
                            </div>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl">
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify">
                                <ul class="list-disc px-6 gap-4">
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl">
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify text-pretty">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facere qui quas, suscipit officia recusandae nemo? Veniam animi numquam eligendi!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detail Low2 -->
                <div class="w-full h-fit rounded-2xl bg-white shadow" id="low2" role="tabpanel" aria-labelledby="low2-tab">
                    <img src="https://picsum.photos/800/300" class="rounded-t-2xl mb-4 w-full" />
                    <div class="px-6 py-4 space-y-8">
                        <div class="flex items-center justify-between w-full">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/logo-sinarmas.svg') }}" class="w-20 h-20" />
                                <div class="px-6">
                                    <h3 class="text-xl font-semibold text-teal-600">Jual Sinar warna Mas</h3>
                                    <p class="text-gray-500">Sinarmas (PT. Lorem Ipsum Dolor)</p>
                                </div>
                            </div>

                            <div class="flex gap-8 text-2xl text-primary">
                                <div>
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                                <div>
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                        </div>

                        <div class="pl-1 text-xl text-secondary font-medium">
                            <h1>
                                <i class="fa-solid fa-star"></i> <span class="text-sm text-darkoff">4.6</span> &middot; <span class="underline text-darkoff text-sm">100 Ulasan</span>
                            </h1>
                        </div>

                        <div>
                            <ul class="text-darkoff space-y-2 mb-4">
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    Jawa Barat, Bekasi, Tambun
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-map-pin"></i>
                                    </span>
                                    Ladang Terong dan Jagung
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    Full Time / Part Time
                                </li>
                                <li class="flex items-center">
                                    <span class="text-secondary text-xl w-8 flex justify-center">
                                        <i class="fa-solid fa-money-bill"></i>
                                    </span>
                                    Rp 500.000 - Rp 1.000.000,- / Bulan
                                </li>
                            </ul>

                            <p class="text-xs text-secondary">
                                2 Hari Yang Lalu
                            </p>
                        </div>

                        <div class="flex gap-6">
                                <div>
                                    <a href=""
                                        class="bg-primary border border-primary rounded-md px-4 py-2 text-white hover:bg-transparent hover:text-primary transition-all">
                                        Lamaran Cepat
                                    </a>
                                </div>
                                <div>
                                    <a href=""
                                        class="bg-secondary border border-secondary rounded-md px-4 py-2 text-white hover:bg-transparent hover:text-secondary transition-all">
                                        Kontak Perusahaan
                                    </a>
                                </div>
                        </div>  
                        
                        <div class="text-justify">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio eius nulla cum qui delectus exercitationem earum enim quisquam velit dolorem iste non suscipit nemo aliquam deleniti, fugiat perspiciatis facere laudantium, recusandae repellat! Laudantium atque quis inventore totam dolores iusto voluptatum!
                            </p>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl">
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nostrum architecto debitis, ipsam neque nisi, quidem ullam suscipit ex, eligendi veritatis minus aperiam obcaecati? Fugiat qui, amet omnis quibusdam, nemo iste porro reprehenderit necessitatibus esse beatae consequuntur aperiam eaque nisi, consectetur doloribus. Doloribus numquam dolore soluta quis, omnis reiciendis. Esse officia temporibus eum quidem tempora reiciendis vitae obcaecati. Officiis iste ipsa optio molestiae voluptas accusantium? A quisquam cumque cum? Placeat quaerat fuga vero asperiores praesentium, repellat quisquam natus necessitatibus voluptatibus.
                                </p>
                            </div>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl">
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify">
                                <ul class="list-disc px-6 gap-4">
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, voluptates?
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-darkoff space-y-2">
                            <div class="uppercase text-secondary font-medium text-2xl">
                                <h1>
                                    Lorem ipsum dolor
                                </h1>
                            </div>

                            <div class="text-justify text-pretty">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facere qui quas, suscipit officia recusandae nemo? Veniam animi numquam eligendi!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Modal untuk Mobile --}}
    <div id="jobModal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full bg-black/50">
    <div class="relative w-full max-w-2xl max-h-screen p-4">
        <div class="relative bg-white rounded-lg shadow-lg overflow-y-auto max-h-[80vh]">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t sticky top-0 bg-white z-10">
                <h3 id="modalTitle" class="text-lg font-semibold text-gray-900">
                    Detail Lowongan
                </h3>
                <button type="button"
                    class="!text-secondary hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-hide="jobModal">
                    ✕
                </button>
            </div>
            <!-- Body -->
            <div id="modalBody" class="space-y-4">
            </div>
        </div>
    </div>
</div>

    </div>
    {{-- End Section 2 --}}

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
     <script>
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById("jobModal");
            const modalBody = document.getElementById("modalBody");
            const modalTitle = document.getElementById("modalTitle");

            // Ambil semua tombol lowongan
            document.querySelectorAll("[role='tab']").forEach(btn => {
                btn.addEventListener("click", () => {
                    if (window.innerWidth < 1024) { // mobile only
                        const targetId = btn.getAttribute("data-tabs-target");
                        const detail = document.querySelector(targetId);
                        if (detail) {
                            modalTitle.textContent = btn.querySelector("h3")?.textContent || "Detail Lowongan";
                            modalBody.innerHTML = detail.innerHTML;
                            modal.classList.remove("hidden");
                        }
                    }
                });
            });

            // Auto close modal pas resize ke desktop
            window.addEventListener("resize", () => {
                if (window.innerWidth >= 1024 && !modal.classList.contains("hidden")) {
                    modal.classList.add("hidden");
                }
            });

            // Close modal pake tombol [x]
            document.querySelectorAll("[data-modal-hide]").forEach(btn => {
                btn.addEventListener("click", () => {
                    modal.classList.add("hidden");
                });
            });
        });
    </script>
</x-app-layout>
