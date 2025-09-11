<!-- Single Card -->
<div class="w-full h-full max-h-[65vh] max-w-sm flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary p-4">
    <!-- Image -->
    <div class="w-full h-60 flex justify-center items-center py-2">
        <img class="w-full h-full object-cover rounded-md" src="{{ asset('storage/' . $training->banner) }}" alt="">
    </div>

    <!-- Description -->
    <div class="space-y-4 mb-8 text-xs md:text-sm lg:text-md">
        <h1 class="text-xl font-semibold text-primary">{{ $training->title }}</h1>

        <ul class="flex gap-4 text-xs lg:text-sm">
            <li>
                <i class="fa-solid fa-book"></i> 
                <span class="font-bold">{{ $training->getMaterialCountAttribute() }} Pelajaran</span>
            </li>
            <li>
                <i class="fa-solid fa-wifi"></i> 
                <span class="font-bold">{{ $training->type }}</span>
            </li>
            <li>
                <span class="text-primary font-bold">Gratis</span>
            </li>
        </ul>
    </div>

    <!-- Button -->
    <div class="w-full">
        <a href="{{ route('detail-pelatihan', ['slug' => $training->slug]) }}"
            class="w-full text-[.8rem] md:text-[.9rem] flex justify-center items-center bg-primary font-medium border border-primary text-white md:px-4 py-1 md:py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition">
            Pelajari Sekarang
        </a>
    </div>
</div>
<!-- Single Card End -->
