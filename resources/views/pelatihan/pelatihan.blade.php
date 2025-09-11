<x-app-layout>
     {{-- Top Mobile --}}
            <div class="flex items-center md:hidden w-full py-4 px-6 justify-between">
                <div class="flex items-center">
                    <img class="w-2/3" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                <div class="flex gap-2">
                    <button id="sortButton" class="flex items-center bg-white rounded-md py-1 px-2">
                        <h1><i class="fa-solid fa-filters"></i></h1>
                    </button>

                @auth
                    <div class="md:hidden pr-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                            <x-dropdown-link class="text-darkoff gap-4" :href="route('profile.edit')">
                                <i class="fa-solid fa-user"></i>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-dropdown-link class="text-red-700 gap-4" :href="route('logout')" 
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa-solid fa-power-off text-sm"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endauth
                        
                    </x-slot>
                </x-dropdown>
            </div>
                @else
                <div class="flex items-center justify-end w-1/3">
                                    <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">
                                        Masuk
                                    </a>
                            </div>
                @endauth
                </div>
            </div>

            <div id="sort-menu" 
                    class="fixed top-0 right-0 h-full w-3/4 bg-white shadow-lg space-y-4 transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
                    
                    <!-- Header dalam menu + tombol close -->
                    <div class="flex items-center justify-between w-full py-2 px-4">
                        <button id="close-sort" class="text-2xl text-gray-700 focus:outline-none">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <!-- Menu list -->
                    <form method="get" class="px-6 font-medium">
                        <div class="text-2xl font-semibold border-b border-gray-500 pb-2 mb-4">
                            <h1>Opsi Filter</h1>
                        </div>
                        
                        <div class="pb-4 mb-4 border-b border-darkoff">
                            <h1 class="text-xl mb-3">Kejuruan</h1>
                            <div class="">
                                <select name="major" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" name="" id="">
                                    <option value="" selected >Semua</option>
                                    
                                    @foreach ($majors as $major)
                                        <option value={{ $major->id }} class="text-gray-700">{{ $major->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="pb-6 mb-4 border-b border-gray-500">
                            <h1 class="text-xl mb-2">Tipe Pelatihan</h1>
                            <div class="px-2">
                                @php
                                    $type = request()->query('type');
                                @endphp
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="type" id="online" value="online" class="focus:ring-primary text-primary rounded-md" {{ $type == 'online' ? 'checked' : '' }}>
                                    <label for="online" class="text-gray-700">Online</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="type" id="offline" value="offline" class="focus:ring-primary text-primary rounded-md" {{ $type == 'offline' ? 'checked' : '' }}>
                                    <label for="offline" class="text-gray-700">Offline</label>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-4">
                            <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-full">
                                Cari
                            </button>
                        </div>
                        
                    </form>
            </div>

    {{-- Top Section --}}
    <form action="" class="w-full" method="get">
        <div class="md:pt-32 w-full place-items-center pb-8 md:px-12 space-y-4">
            {{-- Title --}}
                <div class="text-2xl md:text-4xl text-primary capitalize px-6 font-bold">
                    <h1>temukan pelatihan</h1>
                </div>
            {{-- Title --}}

            {{-- Desc --}}
                <div class="text-justify md:text-center text-sm md:text-md max-w-4xl px-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dignissimos inventore nisi corporis quos sunt assumenda expedita consequuntur enim, reprehenderit, sit alias ipsam sed, excepturi voluptatem repellat sint nesciunt? Ipsa odio quod eos fugiat, fuga natus harum tenetur maiores velit!</p>
                </div>
            {{-- Desc --}}

            {{-- Search --}}
                <div class="px-4 w-full flex justify-center">
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
        <div class="flex flex-col md:grid grid-cols-5 bg-milk">
            <div class="hidden md:block md:col-span-1 my-6 ml-6 px-6 py-4 bg-white rounded-lg border border-primary">
                {{-- Section 1 --}}
                    <div>
                        <div class="text-xl flex items-center justify-center font-semibold border-b-2 border-gray-500 pb-2 mb-4">
                            <h1>Opsi Filter</h1>
                        </div>
                        
                        <div class="pb-4 mb-4 border-b border-darkoff">
                            <h1 class="text-xl mb-3">Kejuruan</h1>
                            <div class="">
                                <select name="major" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" name="" id="">
                                    <option value="" selected >Semua</option>
                                    
                                    @foreach ($majors as $major)
                                        <option value={{ $major->id }} class="text-gray-700">{{ $major->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="pb-6 mb-4 border-b border-gray-500">
                            <h1 class="text-xl mb-2">Tipe Pelatihan</h1>
                            <div class="px-2">
                                @php
                                    $type = request()->query('type');
                                @endphp
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="type" id="online" value="online" class="focus:ring-primary text-primary rounded-md" {{ $type == 'online' ? 'checked' : '' }}>
                                    <label for="online" class="text-gray-700">Online</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="type" id="offline" value="offline" class="focus:ring-primary text-primary rounded-md" {{ $type == 'offline' ? 'checked' : '' }}>
                                    <label for="offline" class="text-gray-700">Offline</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                {{-- Section 1 --}}

                        <div class="py-4">
                            <button type="submit" class="w-full bg-primary border border-primary hover:bg-transparent hover:text-primary transition-all hover:bg-primary-dark text-white font-bold py-2 rounded-lg">
                                Filter Pelatihan
                            </button>
                        </div>
            </div>

            <div class="flex flex-col md:col-span-4 my-6 mx-6">
                <div class="flex flex-col md:grid grid-cols-3 gap-6 px--4 md:px-16">
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

