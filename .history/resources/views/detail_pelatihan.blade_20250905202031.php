<x-guest-layout>
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
        <div class="grid grid-cols-3 w-full py-6">
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

            <div class="col-span-1 w-full">
                {{-- Section 1 --}}
                    <div>
                        <div class="font-semibold">
                            <h1>Pelatihan ini menyediakan:</h1>
                        </div>

                        <div>

                        </div>
                    </div>
                {{-- Section 1 --}}
            </div>
        </div>
    {{-- Main --}}
</x-guest-layout>