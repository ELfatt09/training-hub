<!-- Single Card -->
<div class="w-full h-full max-h-[60vh] max-w-sm flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary p-4">
    <!-- Image -->
    <div class="w-full h-60 flex justify-center items-center p-2">
        <img class="w-full h-full object-cover rounded-md" src="{{ asset('storage/' . $training->banner) }}" alt="">
    </div>

    {{-- Desc --}}
        <div class="space-y-2">
            <div class="">
                <h1>{{ $training->title }}</h1>
            </div>

            <div class="">
                <ul class="flex gap-4">
                    <li>
                        <i class="fa-solid fa-book"></i> <span class="font-bold">{{ $training->getMaterialCountAttribute() }} Pelajaran</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-wifi"></i> <span class="font-bold">{{ $training->type }}</span>
                    </li>
                    <li>
                        <span class="text-primary font-bold">Gratis</span>
                    </li>
                </ul>
            </div>

            <div>
                <p class="text-sm font-normal text-black text-start p-2 leading-[1.5]">
                    {{ Str::limit($training->description, 100) }}
                </p>
            </div>

            <div class="w-full">
                <a href="{{ route('detail-pelatihan', ['slug' => $training->slug]) }}"
                    class="w-full text-[.6rem] md:text-[.9rem] flex justify-center items-center bg-primary font-medium border border-primary text-white md:px-4 py-1 md:py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition"
                    >
                Pelajari Sekarang
                </a>
            </div>

        </div>
    {{-- Desc --}}
</div>
<!-- Single Card End -->

