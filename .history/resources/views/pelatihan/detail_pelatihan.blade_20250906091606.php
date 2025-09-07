<x-app-layout>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    {{-- Main --}}
    <div class="w-full pt-36 pb-8 bg-milk">
        {{-- Tabs for sm --}}
        <div class="sm:block md:hidden">
            <ul class="flex border-b" id="tabs">
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 font-semibold" href="#tab1">Detail</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 font-semibold" href="#tab2">Materi</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 font-semibold" href="#tab3">Statistik</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 font-semibold" href="#tab4">Komentar</a>
                </li>
            </ul>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 md:px-12">
            {{-- Left Column --}}
            <div class="col-span-2 space-y-4" id="tab1">
                {{-- Image --}}
                <div class="w-full h-[40vh]">
                    <img class="object-cover w-full h-full rounded-lg" src="{{ asset('assets/dummyimage.png') }}" alt="Gambar">
                </div>

                {{-- Title --}}
                <div class="text-4xl font-bold capitalize">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                </div>

                {{-- Info --}}
                <div class="space-y-2">
                    {{-- Source --}}
                    <div class="flex ml-2 gap-4 items-center">
                        <div class="w-9 h-9 rounded-full">
                            <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                        </div>
                        <h1 class="text-xl font-medium text-secondary">Lorem Ipsum</h1>
                    </div>

                    {{-- Details --}}
                    <div class="grid grid-cols-2 sm:grid-cols-4 place-items-center">
                        <div class="col-span-1 gap-4 flex text-secondary">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div>
                                <h1>(1945 Ulasan)</h1>
                            </div>
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
                </div>

                {{-- Deskripsi --}}
                <div class="space-y-2 mt-4">
                    <div class="text-3xl font-semibold">
                        <h1>Deskripsi</h1>
                    </div>
                    <div class="space-y-4 text-justify">
                        <p class="text-darkoff">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula.
                        </p>
                        <p class="text-darkoff">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Right Column --}}
            <div class="col-span-1 space-y-2 pr-16 w-full" id="tab2">
                {{-- Section 1 --}}
                <div class="bg-white px-6 py-4 rounded-lg">
                    <div class="font-semibold capitalize">
                        <h1>Pelatihan ini menyediakan</h1>
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</h1>
                            <h1 class="text-secondary">Dolor Sit</h1>
                        </div>
                    </div>
                </div>

                {{-- Section 2 --}}
                <div class="text-3xl font-bold text-secondary px-6 py-4 rounded-lg bg-white">
                    <h1>Gratis</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
