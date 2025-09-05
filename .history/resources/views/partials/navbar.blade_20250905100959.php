<header class="fixed w-full z-40">
            <nav class="w-full pb-5">

        <!-- Upper Content -->
        <div id="upper-bar" class="hidden md:flex w-full h-max overflow-hidden transition-all duration-300">
            
            <!-- Left Side -->
            <div class="bg-primary rounded-br-full shadow-lg w-2/3 h-[32%] lg:h-1/3 py-2 px-4 absolute z-0">
                <ul class="flex items-center gap-8">
                    <li class="lg:text-md text-center text-xs">
                        <a class="text-white flex items-center hover:underline transition" 
                           href="mailto:accalls.indonesia@gmail.com">
                            <i class="fa-solid fa-envelope mr-2"></i> 
                            accalls.indonesia@gmail.com
                        </a>
                </li>
                    <li class="lg:text-md text-xs">
                        <a class="text-white hover:underline transition line-clamp-1" 
                           href="https://wa.me/081317266950">
                            <i class="fa-brands fa-whatsapp mr-2"></i> 
                            0813-1726-6950
                        </a>
                </li>
                    <li class="lg:text-md text-xs">
                        <a class="text-white hover:underline transition line-clamp-1" 
                           href="https://maps.google.com/?q=Jl.Delima+Raya+No.139,+Pancoran+Mas,+Kota+Depok" 
                           target="_blank" 
                           rel="noopener noreferrer">
                            <i class="fa-solid fa-location-dot mr-2"></i> 
                            Jl. Delima Raya No.139, Pancoran Mas, Kota Depok
                        </a>
                </li>
            </ul>
          </div>
            <!-- Left Side End -->

         <!-- Right Side -->
          <div class="w-full bg-secondary flex justify-end items-center py-2 px-12">
            <ul class="flex gap-6"> 
                    <li><a class="text-white hover:text-primary transition" href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a class="text-white hover:text-primary transition" href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
          </div>
            <!-- Right Side End -->

        </div>
        <!-- Upper Content End -->

       <!-- Lower Content -->
        <div id="lower-bar" class="hidden lg:py-0 bg-white md:flex md:py-4 justify-between w-full shadow-md px-10">

            <!-- Left Side -->
             <div class="flex justify-start w-2/3">

                <!-- Logo -->
                <div class="hidden lg:flex items-center">
                    <img class="size-4/6" src="assets/logo/favicon/logo-trainingHub.svg" alt="">
                </div>
                <!-- Logo End -->

                <!-- Links -->
                <ul class="flex gap-5 items-center">
                    <li>
                        <a class="border-b-2 pb-1 text-sm md:text-lg border-primary font-bold" href="">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 pb-1 text-sm md:text-lg hover:border-primary transition-all ease-in-out font-medium" href="#kejuruan">
                            Kejuruan
                        </a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 pb-1 text-sm md:text-lg hover:border-primary transition-all ease-in-out font-medium md:flex mt-1 items-center justify-center" href="{{ route('detail.pelatihan') }}">
                            Pelatihan
                            <span class="ml-2 text-sm md:text-lg"><i class="fa-solid fa-caret-down"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 pb-1 text-sm md:text-lg hover:border-primary transition-all ease-in-out font-medium" href="">
                            Magang
                        </a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 pb-1 text-sm md:text-lg hover:border-primary transition-all ease-in-out font-medium" href="">
                            Akreditasi
                        </a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 pb-1 text-sm md:text-lg hover:border-primary transition-all ease-in-out font-medium" href="">
                            Mitra
                        </a>
                    </li>
                </ul>
                <!-- Links End -->

             </div>
            <!-- Left Side End -->

            <!-- Right Side -->
@auth
<div class="hidden sm:flex sm:items-center sm:ms-6">
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
                                <x-dropdown-link class="text-red-700 gap-4" :href="route('logout')" 
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa-solid fa-power-off text-sm"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
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
            <!-- Right Side End -->

        </div>
        <!-- Lower Content End -->
       <!-- Tombol hamburger di luar -->
<div class="md:hidden fixed w-full px-4 py-2 flex items-end justify-end">
  <button id="hamburger" class="text-2xl text-gray-700 focus:outline-none">
    <i class="fa-solid fa-bars"></i>
  </button>
</div>

{{-- Mobile --}}
<div id="mobile-menu" 
  class="fixed top-0 right-0 h-full w-3/4 bg-white shadow-lg space-y-4 transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
  
  <!-- Header dalam menu + tombol close -->
  <div class="flex items-center justify-between w-full py-2 px-4">
    <img class="h-10" src="assets/logo/favicon/logo-trainingHub.svg" alt="">
    <button id="close-menu" class="text-2xl text-gray-700 focus:outline-none">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <!-- Menu list -->
  <ul class="flex flex-col gap-6 px-6 py-8">
    <li><a href="" class="font-medium"><i class="fa-solid fa-house text-primary"></i> Beranda</a></li>
    <li><a href="#kejuruan" class="font-medium"><i class="fa-solid fa-wrench text-primary"></i> Kejuruan</a></li>
    <li><a href="" class="font-medium"><i class="fa-solid fa-book text-primary"></i> Pelatihan</a></li>
    <li><a href="" class="font-medium"><i class="fa-solid fa-briefcase text-primary"></i> Magang</a></li>
    <li><a href="" class="font-medium"><i class="fa-regular fa-star text-primary"></i> Akreditasi</a></li>
    <li><a href="" class="font-medium"><i class="fa-solid fa-store text-primary"></i> Mitra</a></li>
    
    @guest
    <li><a href="" class="bg-secondary text-white px-2 py-2 rounded-md">Masuk</a></li>
    @endguest

    <form method="POST" action="{{ route('logout') }}">
      @csrf   
      <x-nav-link class="text-red-700 gap-2" :href="route('logout')" 
        onclick="event.preventDefault(); this.closest('form').submit();">
        <i class="fa-solid fa-power-off"></i>
        {{ __('Log Out') }}
      </x-nav-link>
    </form>
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


