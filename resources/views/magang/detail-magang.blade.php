<x-app-layout>
    <!-- Tailwind + Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    {{-- Section 1: Hero --}}
    <div class="inline-block w-full h-[12vh]"></div>
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

            <form class="relative focus:outline-none focus:ring-0 focus:border-none gap-4 w-full flex justify-center items-center pt-4" action="">
                <input placeholder="Temukan Tempat Magang..." 
                       type="text"
                       class="w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD]">

                <select class="w-1/5 border border-lightoff rounded-md bg-transparent text-[#81ACAD] placeholder-[#81ACAD]" name="" id="">
                    <option value="" disabled selected hidden>Klasifikasi...</option>
                    <option value="1">Klasifikasi 1</option>
                    <option value="2">Klasifikasi 2</option>
                    <option value="3">Klasifikasi 3</option>
                </select>

                <input placeholder="Masukkan Kota atau Wilayah..." 
                       type="text"
                       class="w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD]">
            </form>
        </div>
    </div>
    {{-- End Section 1 --}}

    {{-- Section 2: Grid Tabs --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 p-6" id="magangTabs" data-tabs-toggle="#default-tab-content" role="tablist">
        <!-- Kiri: List Lowongan -->
        <div class="col-span-1 space-y-4 pl-12">
            <button id="low1-tab" data-tabs-target="#low1" type="button" role="tab"
                aria-controls="low1" aria-selected="true"
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 hover:bg-gray-50">
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
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 hover:bg-gray-50">
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
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 hover:bg-gray-50">
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
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 hover:bg-gray-50">
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
                class="w-full text-left px-4 py-2 border rounded-lg space-y-4 hover:bg-gray-50">
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
        <div class="col-span-3 pr-12 h-full relative">
            <div id="default-tab-content" class="sticky top-28 h-[85vh] overflow-y-auto rounded-2xl bg-white shadow">
                <!-- Detail Low1 -->
                <div class="w-full h-[85vh] rounded-t-2xl overflow-y-scroll bg-white shadow" id="low1" role="tabpanel" aria-labelledby="low1-tab">
                    <img src="https://picsum.photos/800/300" class="rounded-t-2xl mb-4 w-full" />
                    <div class="px-6 py-4 space-y-8">
                        <div class="flex items-center justify-between w-full">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-20 h-20" />
                                <div class="px-6">
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
    </div>
    {{-- End Section 2 --}}

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</x-app-layout>
