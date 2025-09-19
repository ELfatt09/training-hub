<x-app-layout>
    {{-- Fontawesome & Flowbite --}}
    {{-- <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" /> --}}

    <section class="w-full lg:pt-32 pb-0 lg:pb-8 bg-milk font-jakarta">
        
        <nav class="px-16 mb-4 hidden lg:flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 lg:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-400 dark:hover:text-primary">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
            </a>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 lg:ms-2 dark:text-gray-400">{{ $training->slug }}</span>
            </div>
            </li>
        </ol>
        </nav>

        {{-- Mobile Tabs Nav --}}

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

         {{-- Image --}}
                <div class="block lg:hidden">
                    <div class=" block lg:hidden w-full h-[40vh]">
                        <img class="object-cover w-full h-full" src="{{ asset('storage/' . $training->banner) }}" alt="Gambar">
                    </div>

                    <div class="p-4">
                        <div class="mb-4 text-3xl font-bold">
                            <h1>{{ $training->title }}</h1>
                        </div>

                        {{-- Info --}}
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <div class="w-9 h-9">
                                    <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="Profile picture">
                                </div>
                                <h1 class="text-sm font-semibold text-secondary">{{ $training->author }}</h1>
                            </div>
                            
                            @if(!auth()->user()->subscribedTrainings()->where('training_id', $training->id)->exists())
                        <form action={{ route('pelatihan.daftar') }} method="POST">
                            @csrf
                            <input type="hidden" name="training_id" value="{{ $training->id }}">
                            <button type="submit" class="text-sm bg-primary text-white px-3 py-1 rounded-md">
                                Pelajari Kelas
                            </button>
                        </form>
                        @endif
                        </div>

                        <div class="flex items-center text-secondary" role="img">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <p class="text-xs lg:text-base ml-2">({{ $training->trainingReviews->count() }} Ulasan)</p>
                                </div>

                        <div class="grid grid-cols-3 text-xs gap-y-2 lg:flex w-full lg:justify-between lg:text-base">
                            <div class="flex items-center justify-center md:justify-start lg:ml-8">
                                    <i class="fa-solid fa-globe"></i>
                                    <p class="ml-2">Bahasa Indonesia</p>
                                </div>

                                <div class="flex items-center justify-center md:justify-start lg:mr-8">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <p class="ml-2"><span>{{ $training->subscribers->count() }}</span> Pelajar</p>
                                </div>

                                <div class="flex items-center justify-center md:justify-start">
                                    <i class="fa-solid fa-pen"></i>
                                    <p class="ml-2"><span>{{ $training->updated_at->format('d M Y') }}</span> Diperbaharui</p>
                                </div>
                        </div>
                    </div>

                    <div class="lg:hidden w-full border-b border-gray-200 mb-4">
                                <ul class="flex w-full justify-between grow -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2 w-1/3" role="presentation">
                                        <button class="inline-block p-4 w-full border-b-2 rounded-t-lg" id="konten-tab" data-tabs-target="#deskripsi-content" type="button" role="tab" aria-controls="deskripsi-content" aria-selected="true">Deskripsi</button>
                                    </li>
                                    <li class="mr-2 w-1/3" role="presentation">
                                        <button class="inline-block p-4 w-full border-b-2 rounded-t-lg" id="sidebar-tab" data-tabs-target="#materi-content" type="button" role="tab" aria-controls="materi-content" aria-selected="false">Materi</button>
                                    </li>
                                    <li class="mr-2 w-1/3" role="presentation">
                                        <button class="inline-block p-4 w-full border-b-2 rounded-t-lg" id="sidebar-tab" data-tabs-target="#ulasan-content" type="button" role="tab" aria-controls="ulasan-content" aria-selected="false">Ulasan</button>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>

        {{-- Main Container --}}
        <div id="myTabContent" class="lg:grid lg:grid-cols-3 lg:gap-8 lg:px-16">

            {{-- Left Column --}}
            <div class="col-span-2 pb-12 space-y-2 lg:space-y-8 px-4 lg:px-0" id="deskripsi-content" role="tabpanel" aria-labelledby="konten-tab">
                {{-- Image --}}
                <div class="hidden lg:block w-full h-[40vh]">
                    <img class="object-cover w-full h-full rounded-lg" src="{{ asset('storage/' . $training->banner) }}" alt="Gambar">
                </div>

                {{-- Title --}}
                <div class="hidden lg:block text-3xl lg:text-4xl font-bold capitalize">
                    <h1>{{ $training->title }}</h1>
                </div>

                {{-- Info --}}
                <div class="hidden lg:block space-y-4">
                    <div class="flex items-center gap-4 ml-2">
                        <div class="w-9 h-9">
                            <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="Profile picture">
                        </div>
                        <h1 class="text-xl font-medium text-secondary">{{ $training->author }}</h1>
                    </div>

                    <div class="grid grid-cols-2 text-sm gap-y-2 lg:flex w-full lg:justify-between lg:text-base">
                        <div class="flex flex-col lg:flex-row lg:w-1/2 lg:justify-between lg:pr-12 col-span-1 gap-2 text-secondary">
                            <div class="flex items-center" role="img">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <p class="text-xs lg:text-base ml-2">({{ $training->trainingReviews->count() }} Ulasan)</p>
                            </div>
                            <div class="flex items-center lg:ml-8 whitespace-nowrap">
                                <i class="fa-solid fa-globe"></i>
                                <p class="ml-2">Bahasa Indonesia</p>
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row lg:w-1/2 lg:justify-between lg:pl-12 col-span-1 gap-2 text-darkoff">
                            <div class="flex items-center lg:mr-8">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <p class="ml-2"><span>{{ $training->subscribers->count() }}</span> Pelajar</p>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-pen"></i>
                                <p class="ml-2"><span>{{ $training->updated_at->format('d M Y') }}</span> Diperbaharui</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Deskripsi --}}
                <div class="space-y-2 lg:mt-4">
                    <div class="hidden lg:flex text-2xl lg:text-3xl font-semibold">
                        <h1>Deskripsi</h1>
                    </div>
                    <div class="text-justify">
                        {{ $training->description }}
                    </div>
                </div>

                 <div class=" lg:hidden bg-white py-4 rounded-lg">
                    <div class="font-semibold capitalize mb-4 text-md lg:text-xl">
                        <h1>Pelatihan ini menyediakan:</h1>
                    </div>
                    <div class="space-y-2 font-semibold">
                        <div class="flex justify-between">
                            <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> BAB</h1>
                            <h1 class="text-secondary">{{ $training->trainingSections->count() }}</h1>
                        </div>
                        <div class="flex justify-between">
                            <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Materi</h1>
                            <h1 class="text-secondary">{{ $training->trainingSections->sum(fn($section) => $section->trainingMaterials->count()) }}</h1>
                        </div>
                    </div>
                </div>

                {{-- Materi --}}
                <div class="hidden lg:block mt-4">
                    <div class="text-2xl lg:text-3xl font-semibold mb-4">
                        <h1>Materi Kursus</h1>
                    </div>
                    <div id="accordion-open" data-accordion="open" class="w-full mx-auto">
                    @if (auth()->user()->subscribedTrainings()->where('training_id', $training->id)->exists())
                    @foreach ($training->trainingSections as $section)
                        <x-card-materi :section="$section" :accordionid="$loop->index + 1" :index="2" :open="true" :completed="in_array($section->id, $completedTrainingSectionsIds) ? true : false" />
                    @endforeach
                    @else
                        @foreach ($training->trainingSections as $section)
                        <x-card-materi :section="$section" :accordionid="$loop->index + 1" :index="2" :open="false" :completed="false" />
                    @endforeach
                    @endif
                    </div>
                </div>
            </div>

            {{-- Right Column --}}
            <div class="hidden lg:block col-span-1 space-y-4 lg:px-0" id="materi-content" role="tabpanel" aria-labelledby="materi-tab">
                {{-- Section 1 --}}
                <div class="hidden lg:block bg-white px-6 py-4 rounded-lg">
                    <div class="font-semibold capitalize mb-4 text-xl">
                        <h1>Pelatihan ini menyediakan:</h1>
                    </div>
                    <div class="space-y-2 font-semibold">
                        <div class="flex justify-between">
                            <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> BAB</h1>
                            <h1 class="text-secondary">{{ $training->trainingSections->count() }}</h1>
                        </div>
                        <div class="flex justify-between">
                            <h1 class="text-darkoff"><i class="fa-solid fa-book"></i> Materi</h1>
                            <h1 class="text-secondary">{{ $training->trainingSections->sum(fn($section) => $section->trainingMaterials->count()) }}</h1>
                        </div>
                    </div>
                </div>

                {{-- Section 2 --}}
                <div class="hidden text-3xl lg:flex flex-col justify-center font-bold text-secondary space-y-2 px-6 py-4 rounded-lg bg-white">
                    <h1>Gratis</h1>
                    @if(!auth()->user()->subscribedTrainings()->where('training_id', $training->id)->exists())
                    <form action={{ route('pelatihan.daftar') }} method="POST">
                        @csrf
                        <input type="hidden" name="training_id" value="{{ $training->id }}">
                        <button type="submit" class="!bg-secondary font-semibold py-2 px-4 w-full rounded-lg text-white hover:!bg-white hover:text-secondary border-2 hover:border-secondary transition-all duration-300">
                            Pelajari Kelas
                        </button>
                    </form>
                    @endif
                </div>

                {{-- Section 3 --}}
                <div class="hidden lg:block px-6 py-4 rounded-lg bg-white space-y-2">
                    <div class="text-xl font-semibold">
                        <h1 class="capitalize">Proses pelatihan:</h1>
                    </div>
                    <div class="w-full bg-gray-300 rounded-full h-4 overflow-hidden">
                        <div class="bg-secondary h-4 rounded-full" style="width: 30%;"></div>
                    </div>
                    <div class="text-xs">
                        <p>Lorem Ipsum <span>10</span> dari <span>30</span></p>
                    </div>
                </div>

                {{-- Section 4 --}}
                <div class="hidden lg:block w-full px-6 py-4 rounded-lg bg-white">
                    <div class="text-xl font-semibold mb-4">
                        <p>Statistik Pelatihan:</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col items-center justify-center bg-milk p-4 rounded-lg shadow-sm">
                            <svg class="w-24 h-24">
                                <circle class="text-gray-300" stroke-width="6" stroke="currentColor" fill="transparent" r="40" cx="50%" cy="50%"/>
                                <circle class="text-teal-600" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="25.12" stroke-linecap="round" stroke="currentColor" fill="transparent" r="40" cx="50%" cy="50%"/>
                                <text x="50%" y="50%" text-anchor="middle" dy=".3em" class="text-lg font-semibold fill-gray-700">90%</text>
                            </svg>
                            <p class="text-sm text-gray-600 mt-2">Lorem Ipsum Dolor</p>
                        </div>
                        <div class="flex flex-col items-center justify-center bg-milk p-4 rounded-lg shadow-sm">
                            <svg class="w-24 h-24">
                                <circle class="text-gray-300" stroke-width="6" stroke="currentColor" fill="transparent" r="40" cx="50%" cy="50%"/>
                                <circle class="text-teal-600" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="25.12" stroke-linecap="round" stroke="currentColor" fill="transparent" r="40" cx="50%" cy="50%"/>
                                <text x="50%" y="50%" text-anchor="middle" dy=".3em" class="text-lg font-semibold fill-gray-700">90%</text>
                            </svg>
                            <p class="text-sm text-gray-600 mt-2">Lorem Ipsum Dolor</p>
                        </div>
                    </div>
                </div>

                {{-- Section 5 --}}
                <div class="hidden lg:block px-6 py-4 rounded-lg bg-white space-y-4">
                    <div class="text-xl font-semibold mb-4">
                        <p>Ulasan Pengguna:</p>
                    </div>

                    @foreach ($training->trainingReviews as $review)
                        <div>
                            <div class="flex ml-2 gap-4 items-center mb-1">
                                <div class="w-9 h-9 rounded-full">
                                    <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                </div>
                                <div>
                                    <h1 class="text-lg font-medium text-secondary">{{ $review->user->name ?? 'Anonim' }}</h1>
                                    <div class="text-xs text-primary">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid {{ $i < $review->rating ? 'fa-star' : 'fa-star-half-stroke' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm px-2">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>

               <div class="block lg:hidden px-4 pb-8">
    <div class="text-xl font-semibold mb-6">
        <h1>Materi Kursus</h1>
    </div>
                    <div id="accordion-open-1" data-accordion="open" class="w-full mx-auto">

    @if (auth()->user()->subscribedTrainings()->where('training_id', $training->id)->exists())
        @foreach ($training->trainingSections as $section)
            <x-card-materi 
                :section="$section" 
                :accordionid="$loop->index + 1" 
                :index="1" 
                :open="true" 
                :completed="in_array($section->id, $completedTrainingSectionsIds)" 
            />
        @endforeach
    @else
        @foreach ($training->trainingSections as $section)
            <x-card-materi 
                :section="$section" 
                :accordionid="$loop->index + 1" 
                :index="1" 
                :open="false" 
                :completed="false" 
            />
        @endforeach
    @endif
                    </div>
                </div>
            </div>

            {{-- Tab Ulasan --}}
            <div class="lg:hidden" id="ulasan-content" role="tabpanel" aria-labelledby="ulasan-tab">
                {{-- Section 5 --}}
                <div class="px-6 pb-4 rounded-lg bg-white space-y-4">
                    <div class="text-xl font-semibold mb-4">
                        <p>Ulasan Pengguna:</p>
                    </div>

                    @foreach ($training->trainingReviews as $review)
                        <div>
                            <div class="flex ml-2 gap-4 items-center mb-1">
                                <div class="w-9 h-9 rounded-full">
                                    <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                                </div>
                                <div>
                                    <h1 class="text-lg font-medium text-secondary">{{ $review->user->name ?? 'Anonim' }}</h1>
                                    <div class="text-xs text-primary">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i class="fa-solid {{ $i < $review->rating ? 'fa-star' : 'fa-star-half-stroke' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm px-2">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
