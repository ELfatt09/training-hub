<div id="accordion-open" data-accordion="open" class="w-full mx-auto mt-6">

                                <div id="accordion-open-heading-1">
                                    <button type="button" 
                                    class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-700 bg-white border-y-darkoff border"
                                    data-accordion-target="#accordion-open-body-1" 
                                    aria-expanded="true" 
                                    aria-controls="accordion-open-body-1">
                                    
                                    {{-- Title & Deskripsi --}}
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-teal-500 text-white font-bold">
                                        ✓
                                        </div>
                                        <div>
                                            {{-- Title --}}
                                                <div class="text-xl">
                                                    <h1>{{ $title }}</h1>
                                                </div>
                                            {{-- Title --}}

                                            {{-- Deskripsi --}}
                                                <div class="text-xs flex gap-4">
                                                    <h4><i class="fa-solid fa-film"></i> {{ $jenis }}</h4>
                                                    <h4><i class="fa-solid fa-bookmark"></i> {{ $bab }}</h4>
                                                    <h4><i class="fa-solid fa-hourglass"></i> {{ $durasi }}</h4>
                                                </div>
                                            {{-- Deskripsi --}}
                                        </div>
                                    </div>

                                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                    </button>
                                </div>

                                <a href="" id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                                    <div class="p-4 border border-t-0 rounded-b-lg bg-milk text-sm text-gray-600 flex justify-between">
                                        <div class="space-y-2">
                                            <h1><i class="fa-solid fa-books mr-1"></i> Pengantar Kursus</h1>
                                            <h1><i class="fa-regular fa-messages"></i> Pembahasan Dasar</h1>
                                        </div>
                                        <div>
                                            <h1><i class="fa-solid fa-stopwatch"></i> Estimasi 7 Menit</h1>
                                        </div>
                                    </div>
                                </a>

                            </div>