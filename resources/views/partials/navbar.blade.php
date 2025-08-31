<header class="fixed w-full z-40">
            <nav class="w-full pb-5">
        <!-- Upper Content -->
         <div class="flex w-full h-max overflow-hidden">
         <!-- Left side -->
          <div class="bg-primary rounded-br-full shadow-lg w-2/3 py-2 px-4 absolute z-0">
            <ul class="flex gap-8">
                <li>
                    <a class="text-white hover:underline transition" href="mailto:accalls.indonesia@gmail.com"><i class="fa-solid fa-envelope mr-2"></i> accalls.indonesia@gmail.com</a>
                </li>
                <li>
                    <a class="text-white hover:underline transition" href="https://wa.me/081317266950"><i class="fa-brands fa-whatsapp mr-2"></i> 0813-1726-6950</a>
                </li>
                <li>
                    <a class="text-white hover:underline transition" href="https://maps.google.com/?q=Jl.Delima+Raya+No.139,+Pancoran+Mas,+Kota+Depok" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot mr-2"></i> Jl.Delima Raya No.139, Pancoran Mas, Kota Depok</a>
                </li>
            </ul>
          </div>
         <!-- Left side end -->

         <!-- Right Side -->
          <div class="w-full bg-secondary flex justify-end items-center py-2 px-12">
            <ul class="flex gap-6"> 
                <li>
                    <a class="text-white hover:text-primary transition" href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a class="text-white " href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a class="text-white " href=""><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a class="text-white " href=""><i class="fa-brands fa-linkedin"></i></a>
                </li>
            </ul>
          </div>
         <!-- Right Side End-->
        <!-- Upper Content End -->
         </div>

       <!-- Lower Content -->
        <div class="bg-white flex justify-between w-full shadow-md px-10 ">
            <!-- Left Side -->
             <div class="flex justify-start w-2/3">

                <!-- Logo -->
                <div class="flex items-center">
                    <img class="size-4/5" src="assets/logo/favicon/logo-trainingHub.svg" alt="">
                </div>
                <!-- Logo End -->

                <!-- Links -->
                <ul class="flex gap-5 items-center">
                    <li>
                        <a class="border-b-2 pb-1 border-primary font-bold" href="">Beranda</a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 hover:pb-1 hover:border-primary transition-all ease-in-out font-medium" href="">Kejuruan</a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 hover:pb-1 hover:border-primary transition-all ease-in-out font-medium flex" href="">Pelatihan <span class="ml-2"><i class="fa-solid fa-caret-down"></i></span></a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 hover:pb-1 hover:border-primary transition-all ease-in-out font-medium" href="">Magang</a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 hover:pb-1 hover:border-primary transition-all ease-in-out font-medium" href="">Akreditasi</a>
                    </li>
                    <li>
                        <a class="hover:border-b-2 hover:pb-1 hover:border-primary transition-all ease-in-out font-medium" href="">Mitra</a>
                    </li>
                </ul>
                <!-- Links End -->
             </div>
             <!-- Left Side -->

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
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

@else
<div class="flex items-center justify-end w-1/3">
                <a href="" class="bg-secondary text-white py-2 px-6 rounded-md font-medium">Masuk</a>
            </div>
@endauth
            
            
            <!-- Right Side End -->
        </div>
        <!-- Lower Content End -->
    </nav>
</header>
