<div id="accordion-open-{{ $accordionid }}" data-accordion="open" class="w-full mx-auto mt-6">
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
                        <div class="text-xl">
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
            <div class="p-4 border border-t-0 rounded-b-lg bg-milk text-sm text-gray-600 flex justify-between">
                @foreach ($section->trainingMaterials as $material )
                    <div class="space-y-2">
                    <h1><i class="fa-solid fa-books mr-1"></i> {{ $material->title }}</h1>
                </div>
                @endforeach
            </div>
        </div>
</div>
