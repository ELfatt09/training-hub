<header class="fixed w-full z-40">
    <nav class="w-full pb-5">

        <!-- Upper Content -->
        <div id="upper-bar" class="hidden md:flex w-full h-max overflow-hidden transition-all duration-300">

            <!-- Left Side -->
            <div
                class="bg-primary rounded-br-full flex items-center shadow-lg w-5/6 lg:w-3/4 h-[2.5rem] lg:h-[2.5rem] py-2 px-4 absolute z-0">
                <ul class="flex items-center gap-2 lg:gap-5">
                    <li class="lg:text-sm text-center text-[0.70rem]">
                        <a class="text-white flex items-center hover:underline transition"
                            href="mailto:accalls.indonesia@gmail.com">
                            <i class="fa-solid fa-envelope mr-2"></i>
                            accalls.indonesia@gmail.com
                        </a>
                    </li>
                    <li class="lg:text-sm text-[0.70rem]">
                        <a class="text-white hover:underline transition line-clamp-1" href="https://wa.me/081317266950">
                            <i class="fa-brands fa-whatsapp mr-2"></i>
                            0813-1726-6950
                        </a>
                    </li>
                    <li class="lg:text-sm text-[0.70rem]">
                        <a class="text-white hover:underline transition line-clamp-1"
                            href="https://maps.google.com/?q=Jl.Delima+Raya+No.139,+Pancoran+Mas,+Kota+Depok"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fa-solid fa-location-dot mr-2"></i>
                            Jl. Delima Raya No.139, Pancoran Mas, Kota Depok
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Left Side End -->

            <!-- Right Side -->
            <div class="w-full bg-secondary flex justify-end items-center py-2 px-4 lg:px-12">
                <ul class="flex gap-3 lg:gap-6">
                    <li><a class="text-white hover:text-primary transition" href=""><i
                                class="fa-brands fa-twitter"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i
                                class="fa-brands fa-instagram"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i
                                class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Right Side End -->

        </div>
        <!-- Upper Content End -->

<<<<<<< HEAD
        <!-- Lower Content -->
        <div id="lower-bar"
            class="hidden lg:py-2 bg-white md:flex md:py-4 justify-between w-full shadow-md px-10 transition-all duration-300 z-10 relative">

            <!-- Left Side -->
            <div class="flex justify-start w-2/3">

                <!-- Logo -->
                <div class="hidden lg:flex items-center">
                    <img class="size-4/5" src={{ asset('assets/logo/favicon/logo-trainingHub.svg') }}
                        alt="Logo TrainingHub" loading="lazy" alt="">
=======
       <!-- Lower Content -->
        <div id="lower-bar" class=" hidden bg-white md:flex md:py-4 justify-between w-full shadow-md px-10 transition-all duration-300"">

            <!-- Left Side -->
             <div class="flex justify-between w-2/3 space-x-10">

                <!-- Logo -->
                <div class="hidden lg:flex flex-row justify-between items-center">
                    <img class="h-10" src={{ asset('assets/logo/favicon/logo-trainingHub.svg') }} alt="Logo TrainingHub" loading="lazy" alt="">
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
                </div>
                <!-- Logo End -->

                <!-- Links -->
<<<<<<< HEAD
                <ul class="flex gap-5 items-center">
                    @foreach ([['Beranda', 'dashboard'], ['Kejuruan', 'kejuruan'], ['Pelatihan', 'pelatihan'], ['Magang', 'magang'], ['Akreditasi', 'akreditasi'], ['Mitra', 'mitra']] as [$name, $route])
                        <li>
                            <a class="hover:border-b-2 {{ Route::is($route) ? 'border-b-2' : '' }} pb-1 text-sm lg:text-[1rem] border-primary transition-all ease-in-out font-medium"
                                href="{{ Route::has($route) ? route($route) : '#' }}">
=======
                <ul class="flex gap-8 items-center w-full">
                    @foreach ([
                        ['Beranda', 'dashboard'],
                        ['Kejuruan', 'kejuruan'],
                        ['Pelatihan', 'pelatihan'],
                        ['Magang', 'magang'],
                        ['Akreditasi', 'akreditasi'],
                        ['Mitra', 'mitra'],
                    ] as [$name, $route])
                        <li>
                            <a class="hover:text-primary {{ Route::is($route) ? 'text-primary font-semibold' : '' }} pb-1 lg:text-lg border-primary transition-all ease-in-out font-medium" href="{{ Route::has($route) ? route($route) : '#' }}">
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
                                {{ $name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <!-- Links End -->

            </div>
            <!-- Left Side End -->

             @auth
                                        <x-modal name="logout-modal" maxWidth="sm" :show="$errors->logout->isNotEmpty()" focusable @class(['rounded-full'])>
                                          <div class="w-full flex justify-center items-center pt-6 mb-10">
                                              <div class="py-7 px-6 w-fit bg-black text-white text-6xl rounded-full">
                                                <i class="fa-solid fa-door-open"></i>
                                            </div>
                                          </div>

                                          <div class="w-full flex justify-center items-center text-xl text-center text-pretty font-medium px-4 mb-4">
                                            <h1>
                                              Anda akan keluar dari sesi pengguna aktif
                                            </h1>
                                          </div>

                                          <form method="POST" class="mb-4" action="{{ route('logout') }}">
                                        @csrf
                                       <div class="flex justify-center items-center w-full px-12">
                                            <h1
                                              x-on:click.prevent="$dispatch('close-modal', 'logout-modal')"
                                              class="flex items-center justify-center text-red-600 bg-transparent border border-red-600 px-6 py-1 hover:bg-red-600 hover:text-white rounded-md w-full">
                                              Batal
                                            </h1>
                                       </div>
                                            <x-dropdown-link class="flex justify-center items-center w-full" :href="route('logout')" 
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                            <h1 class="flex items-center justify-center text-white bg-red-600 border border-red-600 px-[5.7rem] py-2 hover:bg-transparent hover:text-red-600 rounded-md w-fit">Keluar Sekarang</h1>
                                        </x-dropdown-link>
                                    </form>
                                        </x-modal>
                                    @endauth

            <!-- Right Side -->
            @auth
<<<<<<< HEAD
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
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
=======
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="60">
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
                                        <x-dropdown-link class="text-darkoff gap-4 border-b border-gray-300 mb-2 space-y-2" :href="route('profile.edit')">
                                            <i class="fa-solid fa-user"></i>
                                        {{ __('Profile') }}

                                      <div class="gap-2 divide-x-2 flex text-xs text-darkoff">
                                      <div>
                                          <h1>
                                            1 Pelajaran Diikuti
                                          </h1>
                                      </div>
                                      <div class="pl-2">
                                          <h1>
                                            2 Kelas Diikuti
                                          </h1>
                                      </div>
                                    </div>
                                    </x-dropdown-link>

                                    <div class="border-b border-gray-300 mb-2 px-4 py-2">
                                      <div class=" text-darkoff hover:text-primary">
                                        <a href="{{ route('dashboard') }}">Beranda</a>
                                      </div>
                                      <div class=" text-darkoff hover:text-primary">
                                        <a href="{{ route('pelatihan') }}">Kelas</a>
                                      </div>
                                    </div>

                                    <!-- Authentication -->

                                    <button
                                    class="w-full"
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'logout-modal')">
                                        @csrf
                                            <x-dropdown-link class="text-red-700 gap-4">
                                                <i class="fa-solid fa-power-off text-sm"></i>
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </button> 
                                </x-slot>
                            </x-dropdown>
                        </div>
            @else
            <div class="flex items-center justify-end w-1/3">
                                <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">
                                    Masuk
                                </a>
                        </div>
>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
            @endauth
            <!-- Right Side End -->

        </div>
        <!-- Lower Content End -->

<<<<<<< HEAD
        <!-- Tombol hamburger di luar -->
        <div class="md:hidden fixed w-fit right-0 px-4 pt-4 flex items-end justify-end bg-white">
            <button id="hamburger" class="text-2xl text-gray-700 focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        {{-- Mobile --}}
        <div id="mobile-menu"
            class="fixed top-0 right-0 h-full w-3/4 bg-white shadow-lg space-y-4 transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">

            <!-- Header dalam menu + tombol close -->
            <div class="flex items-center justify-between w-full py-2 px-4 bg-white">
                <img class="h-8" src="assets/logo/favicon/logo-trainingHub.svg" alt="">
                <button id="close-menu" class="text-2xl text-gray-700 focus:outline-none">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Menu list -->
            <ul class="flex flex-col gap-6 px-6 py-8">
                <li><a href="" class="font-medium"><i class="fa-solid fa-house text-primary"></i> Beranda</a>
                </li>
                <li><a href="#kejuruan" class="font-medium"><i class="fa-solid fa-wrench text-primary"></i> Kejuruan</a>
                </li>
                <li><a href="" class="font-medium"><i class="fa-solid fa-book text-primary"></i> Pelatihan</a>
                </li>
                <li><a href="" class="font-medium"><i class="fa-solid fa-briefcase text-primary"></i> Magang</a>
                </li>
                <li><a href="" class="font-medium"><i class="fa-regular fa-star text-primary"></i> Akreditasi</a>
                </li>
                <li><a href="" class="font-medium"><i class="fa-solid fa-store text-primary"></i> Mitra</a></li>

                @guest
                    <li><a href="" class="bg-secondary text-white px-2 py-2 rounded-md">Masuk</a></li>
                @endguest
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link class="text-red-700 gap-2" :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fa-solid fa-power-off"></i>
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>
                @endauth
            </ul>
        </div>

</header>

<!-- Script toggle -->
<script>
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("mobile-menu");
    const closeMenu = document.getElementById("close-menu");

    // buka
    hamburger.addEventListener("click", () => {
        menu.classList.remove("translate-x-full");
        menu.classList.add("translate-x-0");
    });

    // tutup
    closeMenu.addEventListener("click", () => {
        menu.classList.remove("translate-x-0");
        menu.classList.add("translate-x-full");
    });
</script>
=======
       <!-- Tombol hamburger di luar -->
<div class="md:hidden fixed w-fit right-0 px-4 pt-4 flex items-end justify-end bg-transparent">
  <button id="hamburger" class="text-2xl text-gray-700 focus:outline-none">
    <i class="fa-solid fa-bars"></i>
  </button>
</div>

{{-- Mobile --}}
<div id="mobile-menu" 
  class="fixed top-0 right-0 h-full w-3/4 bg-white shadow-lg space-y-4 transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
  
  <!-- Header dalam menu + tombol close -->
  <div class="flex items-center justify-between w-full py-4 px-6 bg-white border-b border-gray-200">
    <img class="h-8" src="assets/logo/favicon/logo-trainingHub.svg" alt="">
    <button id="close-menu" class="text-2xl text-gray-700 focus:outline-none">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <!-- Menu list -->
  <ul class="flex flex-col px-6 py-8 space-y-2">
    @foreach ([
        ['Beranda', 'dashboard', 'fa-solid fa-house'],
        ['Kejuruan', 'kejuruan', 'fa-solid fa-wrench'],
        ['Pelatihan', 'pelatihan', 'fa-solid fa-book'],
        ['Magang', 'magang', 'fa-solid fa-briefcase'],
        ['Akreditasi', 'akreditasi', 'fa-regular fa-star'],
        ['Mitra', 'mitra', 'fa-solid fa-store'],
    ] as [$name, $route, $icon])
        <li class="flex items-center space-x-3 px-4 py-2 rounded-md {{ Route::is($route) ? 'bg-primary text-white' : 'bg-white text-black hover:bg-gray-200' }}">
            <a class="font-lg" href="{{ Route::has($route) ? route($route) : '#' }}">
                <i class="{{ $icon }} {{ Route::is($route) ? 'text-white' : 'text-primary' }}"></i>
                {{ $name }}
            </a>
        </li>
    @endforeach
    @guest
    <li><a href="" class="bg-secondary text-white px-2 py-2 rounded-md">Masuk</a></li>
    @endguest
    @auth
    <form method="POST" action="{{ route('logout') }}">
      @csrf   
      <x-nav-link class="text-red-700 gap-2" :href="route('logout')" 
        onclick="event.preventDefault(); this.closest('form').submit();">
        <i class="fa-solid fa-power-off"></i>
        {{ __('Log Out') }}
      </x-nav-link>
    </form>
    @endauth
  </ul>
</div>

</header>

    <!-- Script toggle -->


>>>>>>> 005f7ed5aebd872b2b509552444eebe91a8f45d9
