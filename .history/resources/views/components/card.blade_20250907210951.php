<!-- Single Card -->
<div class="w-full h-full max-h-[60vh] max-w-sm flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary p-4">
    <!-- Image -->
    <div class="w-full h-60 flex justify-center items-center p-2">
        <img class="w-full h-full object-cover rounded-md" src="{{ asset('storage/' . $training->banner) }}" alt="">
    </div>

    {{-- Desc --}}
        <div>
            <div>
                <h1>{{ $training->title }}</h1>
            </div>

            <div>
                <ul>
                    <li>
                        <i class="fa-solid fa-book"></i> <span class="font-bold">{{ $training->getMaterialCountAttribute() }} Pelajaran</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-wifi"></i> <span class="font-bold">{{ $training->type }}</span>
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </div>
        </div>
    {{-- Desc --}}
</div>
<!-- Single Card End -->

