<x-app-layout>
    {{-- Top Section --}}
        <div class="pt-32 w-full place-items-center py-8 px-12 space-y-4">
            {{-- Title --}}
                <div class="text-4xl text-primary capitalize font-bold">
                    <h1>temukan pelatihan</h1>
                </div>
            {{-- Title --}}

            {{-- Desc --}}
                <div class="text-center max-w-4xl">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dignissimos inventore nisi corporis quos sunt assumenda expedita consequuntur enim, reprehenderit, sit alias ipsam sed, excepturi voluptatem repellat sint nesciunt? Ipsa odio quod eos fugiat, fuga natus harum tenetur maiores velit!</p>
                </div>
            {{-- Desc --}}

            {{-- Search --}}
                <div class="w-full flex justify-center">
                    <form 
                    action=""
                    class="w-1/2"
                    >
                        <i class="fa-regular fa-magnifying-glass absolute right-[28%] bottom-[61.3%] text-primary"></i>
                        <input placeholder="Cari Pelatihan..." class="w-full rounded-full border border-primary bg-transparent focus:outline-none focus:ring-0 focus:border-secondary" type="text">
                    </form>
                </div>
            {{-- Search --}}
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