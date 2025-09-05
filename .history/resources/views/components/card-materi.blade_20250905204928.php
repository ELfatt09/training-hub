<div id="accordion-open" data-accordion="open" class="w-full mx-auto mt-6">
    @foreach ($materis as $materi)
        <div id="accordion-open-heading-{{ $materi->id }}">
            <button type="button" 
                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-700 bg-gray-100 rounded-lg border focus:ring-2 focus:ring-teal-400"
                data-accordion-target="#accordion-open-body-{{ $materi->id }}" 
                aria-expanded="false" 
                aria-controls="accordion-open-body-{{ $materi->id }}">
                
                {{-- Title & Deskripsi --}}
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full bg-teal-500 text-white font-bold">
                        {{ $loop->iteration }}
                    </div>
                    <div>
                        {{-- Title --}}
                        <div class="text-xl">
                            <h1>{{ $materi->title }}</h1>
                        </div>
                        {{-- Deskripsi --}}
                        <div class="text-xs flex gap-4">
                            <h4><i class="fa-solid fa-film"></i> {{ $materi->jenis }}</h4>
                            <h4><i class="fa-solid fa-bookmark"></i> {{ $materi->bab }}</h4>
                            <h4><i class="fa-solid fa-hourglass"></i> {{ $materi->durasi }}</h4>
                        </div>
                    </div>
                </div>

                <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        <div id="accordion-open-body-{{ $materi->id }}" class="hidden" aria-labelledby="accordion-open-heading-{{ $materi->id }}">
            <div class="p-4 mt-3 border border-t-0 rounded-b-lg bg-white text-sm text-gray-600">
                <p>📹 {{ $materi->jenis }}</p>
                <p>📄 {{ $materi->bab }}</p>
                <p>⏱ Durasi Video: {{ $materi->durasi }}</p>
            </div>
        </div>
    @endforeach
</div>
