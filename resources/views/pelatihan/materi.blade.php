<x-app-layout>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <div class="md:grid grid-cols-3 bg-milk h-fit md:pt-[7rem] pb-12">
        <div class="col-span-2 w-full px-6 md:pl-12 md:pr-4 py-0 md:py-4 bg-white rounded-md">
            {{-- Mobile Top --}}

            <div class="flex items-center md:hidden w-full py-4 px-6 justify-between">
                <div class="flex items-center">
                    <img class="w-2/3" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                <div class="flex gap-2">
                    <button id="sortButton" class="flex items-center bg-milk rounded-md py-1 px-2">
                        <h1><i class="fa-solid fa-books"></i></h1>
                    </button>

                @auth
                    <div class="md:hidden pr-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-milk hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
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
                    class="fixed top-0 right-0 h-full overflow-y-scroll w-3/4 bg-white shadow-lg space-y-4 transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
                    
                    <!-- Header dalam menu + tombol close -->
                    <div class="flex items-center justify-between w-full py-2 px-4">
                        <button id="close-sort" class="text-2xl text-gray-700 focus:outline-none">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <!-- Menu list -->
                            <div class="relative mx-4 overflow-y-auto">
                                <div class="sticky top-4">
                                    <div class="space-y-4 bg-white px-6 pb-12 h-fit rounded-md">
                                        {{-- Title --}}
                                        <div class="text-4xl font-bold text-primary">
                                            <h1>List Materi</h1>
                                        </div>

                                        {{-- Search --}}
                                        <form class="w-full" action="">
                                            <input
                                                class="w-full rounded-md border-2 border-primary focus:border-primary focus:outline-secondary focus:ring-secondary"
                                                placeholder="Cari Materi..." type="text">
                                        </form>

                                        <div class="border border-primary rounded-md">
                                <div id="accordion-example-mobile-1" data-accordion="open"
                                    class="w-full mx-auto py-4 px-4">
                                    <div id="accordion-heading-mobile-1">
                                        <button type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                                            data-accordion-target="#accordion-body-mobile-1" aria-expanded="true" 
                                            aria-controls="accordion-body-mobile-1">

                                            <div class="flex items-center gap-3 text-primary">
                                                <div class="text-xl font-semibold">
                                                    <h1>Sinopsis & Bonus</h1>
                                                </div>
                                            </div>

                                            <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div id="accordion-body-mobile-1"
                                        class="hidden px-4 py-2 space-y-2"
                                        aria-labelledby="accordion-heading-mobile-1">
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>1.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <!-- dst -->
                                    </div>
                                </div>
                            </div>

                            {{-- Section 2 --}}
                            <div class="border border-primary rounded-md">
                                <div id="accordion-example-mobile-2" data-accordion="open"
                                    class="w-full mx-auto py-4 px-4">
                                    <div id="accordion-heading-mobile-2">
                                        <button type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                                            data-accordion-target="#accordion-body-mobile-2" aria-expanded="true"
                                            aria-controls="accordion-body-mobile-2">

                                            <div class="flex items-center gap-3 text-primary">
                                                <div class="text-xl font-semibold">
                                                    <h1>Lorem Ipsum</h1>
                                                </div>
                                            </div>

                                            <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div id="accordion-body-mobile-2"
                                        class="hidden px-4 py-2 space-y-2"
                                        aria-labelledby="accordion-heading-mobile-2">
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <a href="#"
                                            class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                            <span>2.1 Sinopsis</span>
                                            <i class="fa-solid fa-check text-primary"></i>
                                        </a>
                                        <!-- dst -->
                                    </div>
                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
            </div>
            
            {{-- Top --}}
                <div class="flex w-full items-center justify-between border-2 border-primary p-2 md:py-6 md:px-4 rounded-md shadow-md my-6">
                    <div class="flex gap-2 md:gap-6 text-primary">
                        <h1 class="font-semibold text-xs md:text-xl">Lorem Ipsum</h1>
                        <div class="text-white text-xs flex items-center md:text-md bg-primary px-2 rounded-md">
                            <h1><span>50</span> Materi</h1>
                        </div>
                    </div>

                    <div class="text-xs md:text-md flex w-1/3 gap-2 justify-center">
                        <h1 class="flex gap-1">
                            <span>1</span>
                             dari 
                             <span>50</span> 
                             Materi
                        </h1>

                        <div class="hidden md:flex w-full items-center">
                            <div class="w-full bg-teal-200 rounded-full h-3 overflow-hidden flex items-center">
                                <div class="bg-primary h-4 rounded-full w-[30%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- Top --}}

            {{-- Materi --}}
                <div class="space-y-4">
                    {{-- Title --}}
                    <div class="text-4xl font-bold">
                        <h1>1.1 Sinopsis</h1>
                    </div>

                    {{-- Vid --}}
                    <div class="border-2 border-primary rounded-md">
                        <video controls src="https://storage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"></video>
                    </div>

                    {{-- Desc --}}
                    <div class="space-y-4 font-medium text-darkoff text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                    </div>
                </div>
            {{-- Materi --}}
        </div>

        <div class="hidden md:block col-span-1 relative mx-4">
        <div class="sticky top-4">
            <div class="space-y-4 bg-white px-6 h-fit py-8 rounded-md">
                 {{-- Title --}}
                <div class="text-4xl font-bold text-primary">
                    <h1>List Materi</h1>
                </div>

                {{-- Search --}}
                <form class="w-full" action="">
                    <input
                        class="w-full rounded-md border-2 border-primary focus:border-primary focus:outline-secondary focus:ring-secondary"
                        placeholder="Cari Materi..." type="text">
                </form>

                {{-- Section 1 --}}
                    <div class="border border-primary rounded-md">
                        <div id="accordion-example-desktop-1" data-accordion="open"
                            class="w-full mx-auto py-4 px-4">
                            <div id="accordion-heading-desktop-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full px-4 py-2 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                                    data-accordion-target="#accordion-body-desktop-1" aria-expanded="true"
                                    aria-controls="accordion-body-desktop-1">

                                    <div class="flex items-center gap-3 text-primary">
                                        <div class="text-xl font-semibold">
                                            <h1>Sinopsis & Bonus</h1>
                                        </div>
                                    </div>

                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>

                            <div id="accordion-body-desktop-1" class="hidden px-4 py-2 space-y-2"
                                aria-labelledby="accordion-heading-desktop-1">
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>1.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>1.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>1.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>1.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <!-- dst -->
                            </div>
                        </div>
                    </div>

                    {{-- Section 2 --}}
                    <div class="border border-primary rounded-md">
                        <div id="accordion-example-desktop-2" data-accordion="open"
                            class="w-full mx-auto py-4 px-4">
                            <div id="accordion-heading-desktop-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full px-4 py-2 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                                    data-accordion-target="#accordion-body-desktop-2" aria-expanded="true"
                                    aria-controls="accordion-body-desktop-2">

                                    <div class="flex items-center gap-3 text-primary">
                                        <div class="text-xl font-semibold">
                                            <h1>Lorem Ipsum</h1>
                                        </div>
                                    </div>

                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </div>

                            <div id="accordion-body-desktop-2" class="hidden px-4 py-2 space-y-2"
                                aria-labelledby="accordion-heading-desktop-2">
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <a href="#"
                                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                                    <span>2.1 Sinopsis</span>
                                    <i class="fa-solid fa-check text-primary"></i>
                                </a>
                                <!-- dst -->
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>