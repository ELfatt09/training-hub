<x-app-layout>
    {{-- Mobile Top --}}
    <div class="flex items-center lg:hidden w-full py-4 px-6">
                <div class="flex items-center">
                    <img class="w-2/3" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                @auth
                    <div class="lg:hidden pr-6">
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
                       <form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-dropdown-link class="text-red-700 gap-4"
        href="{{ route('logout') }}"
        onclick="event.preventDefault(); if (confirm('Are you sure you want to log out?')) { this.closest('form').submit(); }">
        <i class="fa-solid fa-power-off text-sm"></i>
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

                        
                    </x-slot>
                </x-dropdown>
            </div>
                @else
                <div class="flex items-center justify-end w-1/3 pr-6">
                                    <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">
                                        Masuk
                                    </a>
                            </div>
                @endauth
        </div>
        <div class="relative overflow-hidden w-full h-[40vh]">
            <img 
            src="{{ asset('assets/topbg.svg') }}" 
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="relative flex flex-col items-center justify-center h-full space-y-2">
                <div class="text-white font-bold text-4xl text-center capitalize">
                    <h1>Lorem ipsum dolor <br> sit amet consectetur</h1>
                </div>

                <div class="text-lg text-[#81ACAD]">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum repellat iusto? Deleniti, facere nemo?
                    </p>
                </div>

                <form class="relative focus:outline-none focus:ring-0 focus:border-none gap-4 w-full flex justify-center items-center pt-4" action="">
                    <input placeholder="Temukan Tempat Magang..." 
                           type="text"
                           class="w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD]"
                           >

                    <select class="w-1/5 border border-lightoff rounded-md bg-transparent text-[#81ACAD] placeholder-[#81ACAD]" aria-placeholder="Klasifikasi..." name="" id="">
                        <option value="" disabled selected hidden>Klasifikasi...</option>
                        <option value="1">Klasifikasi 1</option>
                        <option value="2">Klasifikasi 2</option>
                        <option value="3">Klasifikasi 3</option>
                    </select>

                    <input placeholder="Masukkan Kota atau Wilayah..." 
                           type="text"
                           class="w-1/5 border border-lightoff rounded-md bg-transparent text-white placeholder-[#81ACAD]"
                           >
                </form>
            </div>
        </div>
    {{-- Section 1 --}}
</x-app-layout>