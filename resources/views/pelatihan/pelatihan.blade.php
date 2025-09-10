<x-app-layout>
    {{-- Top Section --}}
    <form action="" class="w-full" method="get">
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
                    <div
                    action=""
                    class="w-full bg-white max-w-lg overflow-hidden flex items-center rounded-full border-2 border-primary bg-transparent focus:outline-none focus:ring-0 focus:border-secondary"
                    >
                        <input placeholder="Cari Pelatihan..." name="search" class=" border-none w-full" type="text">
                        <button type="submit" class=" px-4 py-2 rounded-full bg-white">                        
                            <i class="fa-regular fa-magnifying-glass  text-primary"></i>
                        </button>
                    </div>
                </div>
            {{-- Search --}}
        </div>
    {{-- Top Section End --}}

    {{-- Bottom Section --}}
        <div class="grid grid-cols-5 bg-milk">
            <div class="col-span-1 my-6 ml-6 px-6 py-4 bg-white rounded-lg border border-primary">
                {{-- Section 1 --}}
                    <div>
                        <div class="text-xl border-b-2 border-darkoff pb-2 mb-8">
                            <h1>Opsi Filter</h1>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-5 ">
                            <h1 class="text-xl mb-3">Kejuruan</h1>
                            <div class="px-6">
                                <select name="major" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" name="" id="">
                                    <option value="" selected >Semua</option>
                                    
                                    @foreach ($majors as $major)
                                        <option value={{ $major->id }} class="text-gray-700">{{ $major->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="border-b border-darkoff pb-2 mb-4">
                            <h1 class="text-xl">Tipe Pelatihan</h1>
                            <div class="px-6">
                                @php
                                    $type = request()->query('type');
                                @endphp
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="type" id="online" value="online" class="focus:ring-primary" {{ $type == 'online' ? 'checked' : '' }}>
                                    <label for="online" class="text-gray-700">Online</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="type" id="offline" value="offline" class="focus:ring-primary" {{ $type == 'offline' ? 'checked' : '' }}>
                                    <label for="offline" class="text-gray-700">Offline</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                {{-- Section 1 --}}

                {{-- Section 2 --}}
                    <div class="w-full">
                        <div>
                            <h1>Lorem Ipsum</h1>
                            <h2>Level <span>1</span></h2>
                        </div>
                        <form class="w-full" action="">
                            <label for=""></label>
                            <input 
                            class="w-full accent-primary bg-primary appearance-auto" 
                            type="range"
                            min="0"
                            max="5"
                            value="1"
                            >
                        </form>
                    </div>
                {{-- Section 2 --}}
            </div>

            <div class="col-span-4 my-6 mx-6">
                <div class="grid grid-cols-3 gap-6 px-16">
                    @foreach ($trainings as $training)
                    <x-card
                        :training="$training"
                    />
                @endforeach
                </div>
            </div>
        </div>
    {{-- Bottom Section End--}}
    </form>
</x-app-layout>