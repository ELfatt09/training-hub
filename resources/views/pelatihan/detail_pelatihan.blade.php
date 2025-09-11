<x-app-layout>
    {{-- Fontawesome & Flowbite --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <section class="w-full md:pt-32 pb-8 bg-milk font-jakarta">
        {{-- Breadcrumb --}}
        <div class="hidden md:flex items-center px-20 text-darkoff font-medium gap-1 mb-6 text-md">
            <a href="{{ route('dashboard') }}">Home</a>
            <i class="fa-solid fa-chevron-right text-primary text-xs ml-2"></i>
            <a class="ml-2" href="{{ route('detail-pelatihan', ['slug' => $training->slug]) }}">Pelatihan</a>
        </div>

        {{-- Mobile Tabs Nav --}}
        <div class="md:hidden border-b border-gray-200 mb-4">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="konten-tab" data-tabs-target="#main-content" type="button" role="tab" aria-controls="main-content" aria-selected="true">Detail</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="sidebar-tab" data-tabs-target="#sidebar-content" type="button" role="tab" aria-controls="sidebar-content" aria-selected="false">Proses</button>
                </li>
            </ul>
        </div>

        {{-- Main Container --}}
        <div id="myTabContent" class="md:grid md:grid-cols-3 md:gap-8 md:px-16">

            {{-- Left Column --}}
            <div class="col-span-2 space-y-8 px-4 md:px-0" id="main-content" role="tabpanel" aria-labelledby="konten-tab">
                {{-- Image --}}
                <div class="w-full h-[40vh]">
                    <img class="object-cover w-full h-full rounded-lg" src="{{ asset('storage/' . $training->banner) }}" alt="Gambar">
                </div>

                {{-- Title --}}
                <div class="text-3xl md:text-4xl font-bold capitalize">
                    <h1>{{ $training->title }}</h1>
                </div>

                {{-- Info --}}
                <div class="space-y-4">
                    <div class="flex items-center gap-4 ml-2">
                        <div class="w-9 h-9">
                            <img class="rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="Profile picture">
                        </div>
                        <h1 class="text-xl font-medium text-secondary">{{ $training->author }}</h1>
                    </div>

                    <div class="grid grid-cols-2 text-sm gap-y-2 md:flex w-full md:justify-between md:text-base">
                        <div class="flex flex-col md:flex-row md:w-1/2 md:justify-between md:pr-12 col-span-1 gap-2 text-secondary">
                            <div class="flex items-center" role="img">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <p class="text-xs md:text-base ml-2">({{ $training->trainingReviews->count() }} Ulasan)</p>
                            </div>
                            <div class="flex items-center md:ml-8">
                                <i class="fa-solid fa-globe"></i>
                                <p class="ml-2">Bahasa Indonesia</p>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row md:w-1/2 md:justify-between md:pl-12 col-span-1 gap-2 text-darkoff">
                            <div class="flex items-center md:mr-8">
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
                <div class="space-y-2 mt-4">
                    <div class="text-2xl md:text-3xl font-semibold">
                        <h1>Deskripsi</h1>
                    </div>
                    <div class="text-justify">
                        {{ $training->description }}
                    </div>
                </div>

                {{-- Materi --}}
                <div class="mt-4">
                    <div class="text-2xl md:text-3xl font-semibold mb-4">
                        <h1>Materi Kursus</h1>
                    </div>
                    @foreach ($training->trainingSections as $section)
                        <x-card-materi :section="$section" :accordionid="$loop->index + 1" :index="$loop->index" />
                    @endforeach
                </div>
            </div>

            {{-- Right Column --}}
            <div class="hidden md:block col-span-1 space-y-4 md:px-0" id="sidebar-content" role="tabpanel" aria-labelledby="sidebar-tab">
                {{-- Section 1 --}}
                <div class="bg-white px-6 py-4 rounded-lg">
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
                <div class="text-3xl flex flex-col justify-center font-bold text-secondary space-y-2 px-6 py-4 rounded-lg bg-white">
                    <h1>Gratis</h1>
                    <div class="text-white bg-secondary border border-secondary hover:bg-transparent hover:text-secondary transition-all text-xl capitalize justify-center items-center flex py-2 rounded-[5px] w-full">
                        <h1>pelajari Kelas</h1>
                    </div>
                </div>

                {{-- Section 3 --}}
                <div class="px-6 py-4 rounded-lg bg-white space-y-2">
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
                <div class="w-full px-6 py-4 rounded-lg bg-white">
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
                <div class="px-6 py-4 rounded-lg bg-white space-y-4">
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
