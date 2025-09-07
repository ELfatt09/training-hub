<!-- Single Card -->
<div class="w-full h-full max-h-[60vh] max-w-sm flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary p-4">
    <!-- Image -->
    <div class="w-full h-60 flex justify-center items-center p-2">
        <img class="w-full h-full object-cover rounded-md" src="{{ asset('storage/' . $training->banner) }}" alt="">
    </div>

    <!-- Description -->
    <div class="">
    <div class="p-2 space-y-2 md:space-y-4 px-4 ">
        <!-- Top -->
            <!-- Title -->
            <h1 class="text-xl text-primary font-bold text-start px-1 py-2 space-y-2">{{ $training->title }}</h1>
            <!-- Stats -->
            <div  class="flex-col space-y-7">
            < class="flex-col space-y-2">
            <ul class="flex flex-wrap justify-start gap-2 text-[.50rem] md:text-xs text-gray-600">
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
            

        <!-- Detail Desc -->
        <p class="text-sm font-normal text-black text-start p-2 leading-[1.5]">
            {{ Str::limit($training->description, 100) }}
        </p>
            

        <!-- Button -->
        <div class="w-full">
            <a href="{{ route('detail-pelatihan', ['slug' => $training->slug]) }}"
                class="w-full text-[.6rem] md:text-[.9rem] flex justify-center items-center bg-primary font-medium border border-primary text-white md:px-4 py-1 md:py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition"
                >
               Pelajari Sekarang
            </a>
        </div>
    </div>
    </div>
</div>
</div>
<!-- Single Card End -->

