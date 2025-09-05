<x-guest-layout>
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
                    <div class="grid grid-cols-5">
                        <div class="col-span-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Main --}}
</x-guest-layout>