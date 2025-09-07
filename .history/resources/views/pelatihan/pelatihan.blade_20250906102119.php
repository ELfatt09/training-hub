<x-guest-layout>
    {{-- Top Section --}}
        <div>

        </div>
    {{-- Top Section End --}}

    {{-- Bottom Section --}}
        <div class="grid grid-cols-4">
            <div class="col-span-1">

            </div>

            <div class="col-span-4">
               @foreach (range(1,9) as $item)
                   <x-card
                        image='https://picsum.photos/id/1084/536/354?grayscale'
                        title='Lorem Ipsum'
                        pelajaran='11 Pelajaran'
                        status='Online'
                        harga='Gratis'
                        deskripsi='Lorem ipsum dolor sit amet consesctetur elit, desplicit elit oryza sativa,'
                    />
               @endforeach
            </div>
        </div>
    {{-- Bottom Section End--}}
</x-guest-layout>