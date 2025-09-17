<x-app-layout>
    {{-- Top Mobile --}}
            <div class="flex items-center lg:hidden w-full py-4 px-6 justify-between">
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

    <section class="w-full md:pt-12 lg:pt-36 flex justify-center items-center h-fit pt-4 pb-6 lg:py-6">
        <span class="inline-block bg-gray-300 h-[16rem] md:h-[24rem] w-11/12 lg:h-[26rem] lg:w-[42rem]"></span>
    </section>

    <section class="w-full font-medium">
        <div class="flex flex-col gap-4 md:grid-cols-3 lg:gap-0 md:grid lg:grid-cols-8 px-6 lg:px-16 pb-6 lg:py-6">
            <div class="order-2 md:col-span-2 md:order-1 lg:col-span-6 space-y-3 lg:space-y-6">
                <div class="border-2 border-gray rounded-2xl p-4 space-y-4">
                    <div class="font-semibold text-2xl lg:text-4xl max-w-2xl">
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit dicta</h1>
                    </div>

                    <div class="flex justify-between lg:justify-start gap-4 items-center text-xs lg:text-md">
                        <h1>
                            <span class="text-secondary">Badge ID</span> <span class="text-[10px] lg:text-md">088888888888888</span>
                        </h1>

                        <h1 class="flex items-center gap-2 text-primary hover:text-secondary">
                            Lihat di Badgr <i class="fa-regular fa-arrow-up-right-from-square text-[10px] lg:text-xs"></i>
                        </h1>
                    </div>

                    <span class="inline-block h-[1.5px] w-full bg-gray-200"></span>

                    <div class="flex items-center justify-between">
                        <div class="flex gap-4">
                            <span class="hidden lg:inline-block bg-gray-300 h-12 w-20 rounded-md"></span>

                            <div class="text-xs lg:text-md w-full lg:w-fit">
                                <h1 class="">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </h1>

                                <h1 class="uppercase text-primary font-medium">
                                    Gratis
                                </h1>
                            </div>
                        </div>

                        <div>
                            <a class="px-2 py-1 lg:px-4 lg:py-2 text-xs lg:text-md bg-primary border border-primary hover:bg-transparent hover:text-primary transition-all rounded-md text-white whitespace-nowrap" href="">Lihat Kelas</a>
                        </div>
                    </div>
                </div>

                <div class="p-4 text-sm lg:text-xl text-darkoff rounded-xl bg-gray-300">
                    <h1 class="flex items-center"><i class="fa-duotone fa-solid fa-circle-info mr-2 text-lg" style="--fa-primary-color: #ffffff; --fa-primary-opacity: 1; --fa-secondary-color: #666666;"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, nam!</h1>
                </div>

                <div class="hidden lg:flex items-center gap-3 border-2 border-gray-300 px-4 py-2 rounded-md justify-center overflow-hidden">
                     @foreach (['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                        <img src="{{ asset('assets/logo/' . $logo) }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor">
                        <i class="fa-solid fa-star-of-life text-xs lg:text-md text-primary"></i>
                    @endforeach
                        <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor"> 
                </div>

                <div class="flex lg:hidden border-2 border-gray-300 px-4 py-2 rounded-md justify-center overflow-hidden">
                    <div class="animate-marquee flex items-center gap-3">
                         @foreach (['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                            <img src="{{ asset('assets/logo/' . $logo) }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor">
                            <i class="fa-solid fa-star-of-life text-xs lg:text-md text-primary"></i>
                        @endforeach
                            <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor">
                         @foreach (['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                            <img src="{{ asset('assets/logo/' . $logo) }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor">
                            <i class="fa-solid fa-star-of-life text-xs lg:text-md text-primary"></i>
                        @endforeach
                            <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="w-[2rem] lg:h-16 lg:w-[4.4rem] object-contain" alt="sponsor">
                    </div>
                </div>

            </div>

            <div class="order-1 md:order-2 md:col-span-1 lg:col-span-2 border-2 border-gray-300 rounded-2xl lg:ml-8 py-2 space-y-6 md:space-y-2">
                <div class="w-full gap-1 lg:gap-2 flex flex-col justify-center items-center">
                    <span class="inline-block w-16 h-16 lg:w-24 lg:h-24 rounded-full bg-gray-300"></span>
                    <h1 class="text-xl lg:text-3xl font-bold">Lorem Ipsum</h1>
                </div>

                <div class="space-y-2">
                    <div class="font-semibold w-full flex flex-col justify-center items-center">
                        <h1 class="text-darkoff text-md lg:text-xl">Diberikan Pada</h1>
                        <h1 class="text-sm">5 Jan, 2025</h1>
                    </div>
                    <div class="font-semibold w-full flex flex-col justify-center items-center">
                        <h1 class="text-darkoff text-md lg:text-xl">Berlaku Sampai</h1>
                        <h1 class="text-sm">5 Jan, 2028</h1>
                    </div>
                </div>

                <div class="w-full flex flex-col justify-center items-center space-y-2">
                    <a 
                    download="" 
                    href=""
                    class="bg-primary text-sm lg:text-md text-white border border-primary hover:bg-transparent hover:text-primary px-2 lg:px-4 py-2 w-1/2 flex justify-center items-center gap-2 rounded-md transition-all font-semibold">
                        <i class="fa-regular fa-arrow-down-to-bracket text-sm"></i> Unduh
                    </a>
                    <a 
                    download="" 
                    href=""
                    class="bg-primary text-sm lg:text-md text-white border border-primary hover:bg-transparent hover:text-primary px-2 lg:px-4 py-2 w-1/2 flex justify-center items-center gap-2 rounded-md transition-all font-semibold">
                        <i class="fa-regular fa-share-nodes"></i> Bagikan
                    </a>
                </div>

                <div class="w-full flex flex-col justify-center items-center px-4">
                    <span class="mt-2 inline-block h-[1px] bg-gray-300 w-full"></span>
                    <a class="mt-2 text-sm lg:text-md text-primary hover:text-secondary" href="">Lihat Profile Lengkap <i class="fa-regular fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout> 