<x-guest-layout>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    {{-- Breadcrumb --}}

    {{-- Breadcrumb End--}}

    {{-- Main --}}
        <div class="grid grid-cols-3 w-full">
            <div class="col-span-2 w-full px-12">
                {{-- Image --}}
                <div class="h-[50%] w-full">
                    <img class="object-cover h-full w-full" src="https://picsum.photos/536/354" alt="">
                </div>

                {{-- Title --}}
                <div>
                    <h1>Lorem ipsum dolor sit amet.</h1>
                </div>

                {{-- Info --}}
                <div>
                    {{-- Source --}}
                    <div class="flex gap-4 items-center">
                        {{-- Pfp --}}
                        <div class="w-10 h-10 rounded-full">
                            <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                        </div>
                        {{-- Username --}}
                        <h1>
                            Lorem Ipsum
                        </h1>
                    </div>

                    {{-- Tulisan --}}
                    <div class="grid grid-cols-4 place-items-center">
                        <div class="col-span-1 gap-4 flex">
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
            
        </div>
    {{-- Main --}}
</x-guest-layout>