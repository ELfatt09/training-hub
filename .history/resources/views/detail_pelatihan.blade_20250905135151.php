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
                    <div>
                        {{-- Pfp --}}
                        <div>
                            <img src="{{ asset('assets/dummy') }}" alt="">
                        </div>
                        {{-- Username --}}
                        <div>
                            Lorem Ipsum
                        </div>
                    </div>

                    {{-- Tulisan --}}
                    <div class="grid grid-cols-5">
                        <div class="col-span-1">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- Main --}}
</x-guest-layout>