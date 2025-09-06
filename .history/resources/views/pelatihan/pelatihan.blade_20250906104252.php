<x-app-layout>
    {{-- Top Section --}}
        <div>
            {{-- Title --}}
                <div>
                    <h1></h1>
                </div>
            {{-- Title --}}

            {{-- Desc --}}
                <div>
                    <p></p>
                </div>
            {{-- Desc --}}
        </div>
    {{-- Top Section End --}}

    {{-- Bottom Section --}}
        <div class="grid grid-cols-5 bg-milk">
            <div class="col-span-1 my-6 mx-6 px-6 py-4 bg-white rounded-2xl border border-primary shadow-xl">
                {{-- Section 1 --}}
                    <div>
                        <div class="text-xl border-b-2 border-darkoff pb-2 mb-4">
                            <h1>Opsi Filter</h1>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-4">
                            <h1 class="text-xl">Lorem</h1>
                            <div class="px-6">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-4">
                            <h1 class="text-xl">Lorem</h1>
                            <div class="px-6">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-4">
                            <h1 class="text-xl">Lorem</h1>
                            <div class="px-6">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-4">
                            <h1 class="text-xl">Lorem</h1>
                            <div class="px-6">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="" id="">
                                    Lorem
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- Section 1 --}}
            </div>

            <div class="col-span-4 my-6 mx-6">
                <div class="grid grid-cols-3 gap-6 px-16">
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
        </div>
    {{-- Bottom Section End--}}
</x-app-layout>