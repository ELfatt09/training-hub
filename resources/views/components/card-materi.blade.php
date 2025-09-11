<div id="accordion-open-{{ $accordionid }}" data-accordion="open" class="w-full mx-auto">
        <div id="accordion-open-heading-{{ $accordionid }}-{{ $index }}">
            <button type="button" 
                class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-700 bg-white border-y-darkoff border"
                data-accordion-target="#accordion-open-body-{{ $accordionid }}-{{ $index }}" 
                aria-expanded="false" 
                aria-controls="accordion-open-body-{{ $accordionid }}-{{ $index }}">
                
                {{-- Title & Description --}}
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full bg-teal-500 text-white font-bold">
                        ✓
                    </div>
                    <div>
                        <div class="text-md md:text-xl font-bold">
                            <h1>{{ $section->title }}</h1>
                        </div>
                        <div class="text-xs flex gap-4">
                            <h4><i class="fa-solid fa-bookmark"></i> {{ $section->trainingMaterials->count()}}</h4>
                        </div>
                    </div>
                </div>

                <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        <div id="accordion-open-body-{{ $accordionid }}-{{ $index }}" class="hidden" aria-labelledby="accordion-open-heading-{{ $accordionid }}-{{ $index }}">
            <div class="p-4 bg-milk text-md text-gray-600 flex flex-col space-y-6 border-b border-darkoff justify-between">
                @foreach ($section->trainingMaterials as $material )
                <a class="flex justify-between" href={{ route('pelatihan.materi', ['slug' => $material->slug]) }}>
                    <div class="space-y-2 text-primary font-medium text-md">
                        <h1 class="gap-2"><i class="fa-solid fa-books mr-1 text-darkoff"></i> {{ $material->title }}</h1>
                    </div>

                    <div class="text-darkoff flex items-center justify-center font-medium">
                        <h1 class="flex items-center gap-1"><i class="fa-solid fa-hourglass-start text-sm"></i> <span class="text-primary">15 Menit</span></h1>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
</div>
