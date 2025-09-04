<!-- Single Card -->
<div class="w-full max-w-xs flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary mx-auto">
    <!-- Image -->
    <div class="w-full flex justify-center items-center py-2">
        <img class="w-full max-w-full h-auto aspect-[16/9] object-cover rounded-md" src="{{ $image }}" alt="Card Image">
    </div>

    <!-- Description -->
    <div class="p-2 space-y-2">
        <!-- Top -->
        <div class="space-y-1">
            <!-- Title -->
            <h1 class="text-xs text-primary font-bold text-start">{{ $title }}</h1>

            <!-- Stats -->
            <ul class="flex flex-wrap justify-start gap-1 text-[10px] text-gray-600">
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
        <p class="text-[10px] font-normal text-gray-700 text-start leading-relaxed">
            {{ $deskripsi }}
        </p>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
               class="w-full text-[10px] flex justify-center items-center bg-primary font-medium border border-primary text-white px-2 py-1 rounded-md hover:text-primary hover:border hover:bg-transparent transition-all duration-200">
               Pelajari Sekarang
            </a>
        </div>
    </div>
</div>
<!-- Single Card End -->