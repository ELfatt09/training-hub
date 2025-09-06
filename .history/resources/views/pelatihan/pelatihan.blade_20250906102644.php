<x-guest-layout>
    {{-- Top Section --}}
        <div>

        </div>
    {{-- Top Section End --}}

    {{-- Bottom Section --}}
        <div class="grid grid-cols-4">
            <div class="col-span-1">

            </div>

            <div class="col-span-3">
                @foreach (range(1,9) as $item)
                    
                @endforeach
            </div>
        </div>
    {{-- Bottom Section End--}}
</x-guest-layout>