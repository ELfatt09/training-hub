<x-guest-layout>
    {{-- Top Section --}}
        <div>

        </div>
    {{-- Top Section End --}}

    {{-- Bottom Section --}}
       <div class="grid grid-cols-4 gap-6">
    <!-- Sidebar -->
    <div class="col-span-1">
        <!-- isi sidebar / kosong -->
    </div>

    <!-- Konten Card -->
    <div class="col-span-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach (range(1,6) as $i)
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
</div>

    {{-- Bottom Section End--}}
</x-guest-layout>