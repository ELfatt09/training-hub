<x-app-layout>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    {{-- Breadcrumb --}}
        <div>

        </div>
    {{-- Breadcrumb End--}}

    {{-- Main --}}
        <div class="grid grid-cols-3 w-full pt-36 pb- bg-milk">
            <div class="col-span-2 w-full space-y-4 px-12">
                {{-- Image --}}
                <div class="w-full h-[40vh]">
                    <img 
                        class="object-cover w-full h-full rounded-lg" 
                        src="{{ asset('assets/dummyimage.png') }}" 
                        alt="Gambar"
                    >
                </div>

                {{-- Title --}}
                <div class="text-4xl font-bold capitalize">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                </div>

                {{-- Info --}}
                <div class="space-y-2">
                    {{-- Source --}}
                    <div class="flex ml-2 gap-4 items-center">
                        {{-- Pfp --}}
                        <div class="w-9 h-9 rounded-full">
                            <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                        </div>
                        {{-- Username --}}
                        <h1 class="text-xl font-medium text-secondary">
                            Lorem Ipsum
                        </h1>
                    </div>

                    {{-- Tulisan --}}
                    <div class="grid grid-cols-4 place-items-center">
                        <div class="col-span-1 gap-4 flex text-secondary">
                           {{-- Stars --}}
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                           {{-- Stars --}}

                           {{-- Rating --}}
                            <div>
                                <h1>(1945 Ulasan)</h1>
                            </div>
                           {{-- Rating --}}
                        </div>

                        <div class="col-span-1">
                            <h1><i class="fa-solid fa-graduation-cap"></i> <span>2950</span> Pelajar</h1>
                        </div>

                        <div class="col-span-1">
                            <h1><i class="fa-solid fa-pen"></i> <span>15/15/25</span> Diperbaharui</h1>
                        </div>

                        <div class="col-span-1">
                            <h1><i class="fa-solid fa-globe"></i> Bahasa Indonesia</h1>
                        </div>
                    </div>
                    {{-- Tulisan --}}
            </div>

            {{-- Deskripsi --}}
                    <div class="space-y-2 mt-4">
                        {{-- Title --}}
                        <div class="text-3xl font-semibold">
                            <h1>Deskripsi</h1>
                        </div>

                        {{-- Desc --}}
                        <div class="space-y-4 text-justify">
                            <p class="text-darkoff">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula. Donec sit amet risus semper, interdum odio ut, tincidunt leo. Nulla laoreet eros ornare, rhoncus nulla nec, dapibus massa. Aenean malesuada urna quis purus elementum, ut sollicitudin metus consectetur. Etiam laoreet nulla sed ipsum consectetur, id elementum lectus placerat. Proin quis feugiat ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ac nunc in dolor tempus rutrum nec lobortis ex
                            </p>
                            <p class="text-darkoff">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula. Donec sit amet risus semper, interdum odio ut, tincidunt leo. Nulla laoreet eros ornare, rhoncus nulla nec, dapibus massa. Aenean malesuada urna quis purus elementum, ut sollicitudin metus consectetur. Etiam laoreet nulla sed ipsum consectetur, id elementum lectus placerat. Proin quis feugiat ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ac nunc in dolor tempus rutrum nec lobortis ex
                            </p>
                        </div>
                    </div>
                {{-- Deskripsi --}}

                {{-- Materi --}}
                    <div class="mt-4">
                        {{-- Title --}}
                            <div class="text-3xl font-semibold">
                                <h1>Materi Kursus</h1>
                            </div>
                        {{-- Title --}}

                        {{-- Materinya --}}
                            <x-card-materi
                                title="Lorem Ipsum"
                                jenis="Video"
                                bab="5 Bab"
                                durasi="5 Jam"
                            />
                        {{-- Materinya --}}
                    </div>
                {{-- Materi --}}
            </div>

            <div class="col-span-1 space-y-2 pr-16 w-full">
                {{-- Section 1 --}}
                    <div class="bg-white px-6 py-4 rounded-lg">
                        <div class="font-semibold capitalize">
                            <h1>Pelatihan ini menyediakan</h1>
                        </div>

                        <div>
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                            {{-- Single Sedia --}}
                                <div class="flex justify-between">
                                    <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                                    <h1 class="text-secondary">Dolor Sit</h1>
                                </div>
                            {{-- Single Sedia --}}
                        </div>
                    </div>
                {{-- Section 1 --}}

                {{-- Section 2 --}}
                    <div class="text-3xl font-bold text-secondary px-6 py-4 rounded-lg bg-white">
                        <h1>Gratis</h1>
                    </div>
                {{-- Section 2 --}}

                {{-- Section 3 --}}
                    <div class="px-6 py-4 rounded-lg bg-white space-y-2">
                        <div>
                            <h1 class="capitalize">Proses pelatihan</h1>
                        </div>
                        <div class="w-full bg-gray-300 rounded-full h-4 overflow-hidden">
                            <div class="bg-teal-500 h-4 rounded-full" style="width: 30%;"></div>
                        </div>
                        <div class="text-xs">
                            <p>Lorem Ipsum <span>10</span> dari <span>30</span></p>
                        </div>
                    </div>
                {{-- Section 3 --}}

                {{-- Section 4 --}}
                    <div class="w-full max-w-md px-6 py-4 rounded-lg bg-white ">
                    <p class="mb-4">Statistik Pelatihan</p>

                    <div class="grid grid-cols-2 gap-4">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center justify-center bg-milk p-4 rounded-lg shadow-sm">
                        <!-- Lingkaran -->
                        <svg class="w-24 h-30">
                            <circle
                            class="text-gray-300"
                            stroke-width="6"
                            stroke="currentColor"
                            fill="transparent"
                            r="40"
                            cx="50"
                            cy="50"
                            />
                            <circle
                            class="text-teal-600"
                            stroke-width="6"
                            stroke-dasharray="251.2"   <!-- 2 * π * r -->
                            stroke-dashoffset="25.12"  <!-- 10% kosong → 90% progress -->
                            stroke-linecap="round"
                            stroke="currentColor"
                            fill="transparent"
                            r="40"
                            cx="50"
                            cy="50"
                            />
                            <text
                            x="50%"
                            y="50%"
                            text-anchor="middle"
                            dy=".3em"
                            class="text-lg font-semibold fill-gray-700"
                            >
                            90%
                            </text>
                        </svg>
                        <p class="text-sm text-gray-600 mt-2">Lorem Ipsum Dolor</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex flex-col items-center justify-center bg-milk p-4 rounded-lg shadow-sm">
                        <svg class="w-24 h-30">
                            <circle
                            class="text-gray-300"
                            stroke-width="6"
                            stroke="currentColor"
                            fill="transparent"
                            r="40"
                            cx="50"
                            cy="50"
                            />
                            <circle
                            class="text-teal-600"
                            stroke-width="6"
                            stroke-dasharray="251.2"
                            stroke-dashoffset="25.12"
                            stroke-linecap="round"
                            stroke="currentColor"
                            fill="transparent"
                            r="40"
                            cx="50"
                            cy="50"
                            />
                            <text
                            x="50%"
                            y="35%"
                            text-anchor="middle"
                            dy=".3em"
                            class="text-lg font-semibold fill-gray-700"
                            >
                            90%
                            </text>
                        </svg>
                        <p class="text-sm text-gray-600 mt-2">Lorem Ipsum Dolor</p>
                        </div>
                    </div>
                    </div>
                {{-- Section 4 --}}

                {{-- Section 5 --}}
                    <div class="px-6 py-4 rounded-lg bg-white space-y-4">
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                        {{-- Single Comment --}}
                            <div>
                                <div class="flex ml-2 gap-4 items-center mb-1">
                                    {{-- Pfp --}}
                                    <div class="w-9 h-9 rounded-full">
                                        <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                    </div>
                                    
                                    <div>
                                        <h1 class="text-lg font-medium text-secondary">
                                            Lorem Ipsum
                                        </h1>
                                         <div class="text-xs text-primary">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, atque!</p>
                            </div>
                        {{-- Single Comment --}}
                    </div>
                {{-- Section 5 --}}
            </div>
        </div>
    {{-- Main --}}
</x-app-layout>