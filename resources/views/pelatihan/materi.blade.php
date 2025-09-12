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
                        <h1 class="font-semibold text-md md:text-xl">{{ $trainingSubscriber->training->title }}</h1>
                        <div class="text-white text-md flex items-center md:text-lg bg-primary px-2 rounded-md">
                            <h1><span>{{ $trainingSubscriber->training->trainingSections->flatMap->trainingMaterials->count() }}</span> Materi</h1>
                        </div>
                    </div>

                    <div class="text-md md:text-lg flex w-1/3 gap-2 justify-center">
                        <h1 class="flex gap-1">
                            <span>{{ $trainingSubscriber->completedTrainingMaterialsCount() }}</span>
                             dari 
                             <span>{{ $trainingSubscriber->training->trainingSections->flatMap->trainingMaterials->count() }}</span> 
                             Materi
                        </h1>

                        <div class="hidden md:flex w-full items-center">
                            <div class="w-full bg-teal-200 rounded-full h-3 overflow-hidden flex items-center">
                                <div class="bg-primary h-4 rounded-full " style="width: {{ $trainingSubscriber->progress() }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- Top --}}

            {{-- Materi --}}
                <div class="flex flex-col  px-5 py-16">
                    {{-- Title --}}
                    <div class="text-5xl font-bold md:text-6xl lg:text-7xl mb-10">
                        <h1>{{ $material->title }}</h1>
                    </div>

                    {{-- Vid --}}
                    @if($material->getEmbedUrlAttribute() != null)
                    <div class="aspect-video w-full mb-10">
                        <iframe class="h-full w-full" src="{{ $material->getEmbedUrlAttribute() }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                    @endif

                    {{-- Desc --}}
                    <div class="space-y-4 font-jakarta text-justify  
                    text-black
                    [&>h2]:text-3xl [&>h2]:font-bold
                    [&>h3]:text-2xl [&>h3]:font-semibold [&>h3]:tracking-wide
                    [&>p]:text-xl [&>p]:leading-relaxed [&>p]:tracking-wide
                    [&>ol]:list-decimal [&>ol]:pl-8 [&>ol]:space-y-2
                    [&>ul]:list-disc [&>ul]:pl-8 [&>ul]:space-y-2
                    [&>li]:text-base [&>li]:tracking-wide
                    [&>pre]:text-sm [&>pre]:font-semibold [&>pre]:bg-gray-800 [&>pre>code]:text-secondary [&>pre]:p-3 [&>pre]:rounded-md                     ">
                        {!! $material->content !!}
                    </div>
                </div>
            {{-- Materi --}}
        </div>

        <div class="hidden md:block col-span-1 relative mx-4">
  <div class="sticky top-4">
    <div class="flex flex-col bg-white px-6 h-[80vh] py-8 rounded-md">
      
      {{-- Title --}}
      <div class="text-4xl font-bold text-primary mb-4">
        <h1>List Materi</h1>
      </div>

      {{-- Search --}}
      <form class="w-full mb-4" action="">
        <input
          class="w-full rounded-md border-2 border-primary focus:border-primary focus:outline-secondary focus:ring-secondary"
          placeholder="Cari Materi..." type="text">
      </form>

      {{-- Accordion List --}}
      <div class="flex-1 overflow-y-auto space-y-4 pr-2">
        @foreach ($trainingSubscriber->training->trainingSections as $trainingSection)
          <div class="border border-primary rounded-md">
            <div id="accordion-example-desktop-{{ $trainingSection->id }}" data-accordion="open"
              class="w-full mx-auto py-4 px-4">
              <div id="accordion-heading-desktop-{{ $trainingSection->id }}">
                <button type="button"
                  class="flex items-center justify-between w-full px-4 py-2 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                  data-accordion-target="#accordion-body-desktop-{{ $trainingSection->id }}" aria-expanded="true"
                  aria-controls="accordion-body-desktop-{{ $trainingSection->id }}">

                  <div class="flex items-center gap-3 text-primary">
                    <div class="text-xl font-semibold">
                      <h1>{{ $trainingSection->title }}</h1>
                    </div>
                  </div>

                  <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform"
                    fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
              </div>

              <div id="accordion-body-desktop-{{ $trainingSection->id }}" class="hidden px-4 py-2 space-y-2"
                aria-labelledby="accordion-heading-desktop-{{ $trainingSection->id }}">
                @foreach ($trainingSection->trainingMaterials as $trainingMaterial)
                  <a href="{{ route('pelatihan.materi', $trainingMaterial->slug) }}"
                    class="flex font-semibold w-full justify-between items-center text-darkoff hover:text-primary">
                    <span>{{ $trainingMaterial->title }}</span>
                    @if(in_array($trainingMaterial->id, $completedTrainingMaterialsIds))
                    <i class="fa-solid fa-check text-primary"></i>
                    @endif
                  </a>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Prev / Next Buttons --}}
      <div class="flex justify-between items-center mt-4">
        <button class="flex items-center gap-2 bg-primary border border-primary hover:bg-transparent hover:text-primary transition-all text-white px-4 py-2 rounded-md">
          <i class="fa-solid fa-chevron-left"></i> Sebelumnya
        </button>
        <button class="flex items-center gap-2 bg-primary border border-primary hover:bg-transparent hover:text-primary transition-all text-white px-4 py-2 rounded-md">
          Selanjutnya <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>

    </div>
  </div>
</div>

    </div>
</x-app-layout>