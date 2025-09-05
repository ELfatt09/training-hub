<!-- Single Card -->
<div class="w-full max-w-sm flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary mx-auto">
    <!-- Image -->
    <div class="w-full flex justify-center items-center py-4">
        <img class="w-full max-w-xs h-auto aspect-[16/9] object-cover rounded-md" src="{{ $image }}" alt="Card Image">
    </div>

    <!-- Description -->
    <div class="p-4 space-y-4">
        <!-- Top -->
        <div class="space-y-2">
            <!-- Title -->
            <h1 class="text-base text-primary font-bold text-start">{{ $title }}</h1>

            <!-- Stats -->
            <ul class="flex flex-wrap justify-start gap-3 text-sm text-gray-600">
                <li class="flex items-center gap-1">
                    <i class="fa-solid fa-book"></i> 
                    <span class="font-bold">{{ $pelajaran }}</span>
                </li>
                <li class="flex items-center gap-1">
                    <i class="fa-solid fa-wifi"></i> 
                    <span class="font-bold">{{ $status }}</span>
                </li>
                <li class="flex items-center gap-1">
                    <i class="fa-solid fa-money-bill-wave"></i> 
                    <span class="text-primary font-bold">{{ $harga }}</span>
                </li>
            </ul>
        </div>

        <!-- Detail Desc -->
        <p class="text-sm font-normal text-gray-700 text-start leading-relaxed">
            {{ $deskripsi }}
        </p>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
               class="w-full text-sm flex justify-center items-center bg-primary font-medium border border-primary text-white px-3 py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition-all duration-200">
               Pelajari Sekarang
            </a>
        </div>
    </div>
</div>
<!-- Single Card End -->