<!-- Single Card -->
<div class="w-full max-h max-w-xs flex-shrink-0 bg-white shadow-md rounded-lg overflow-hidden border border-primary mx-auto">
    <!-- Image -->
    <div class="w-full flex justify-center items-center py-2">
        <img class="w-10/12 h-24 object-cover rounded-md" src="{{ $image }}" alt="">
    </div>

    <!-- Description -->
    <div class="p-2 space-y-2">
        <!-- Top -->
        <div class="space-y-1">
            <!-- Title -->
            <h1 class="text-sm text-primary font-bold text-start">{{ $title }}</h1>

            <!-- Stats -->
            <ul class="flex flex-wrap justify-start gap-2 text-xs text-gray-600">
                <li>
                    <i class="fa-solid fa-book"></i> <span class="font-bold">{{ $pelajaran }}</span>
                </li>
                <li>
                    <i class="fa-solid fa-wifi"></i> <span class="font-bold">{{ $status }}</span>
                </li>
                <li>
                    <i class="fa-solid fa-money-bill-wave"></i> 
                    <span class="text-primary font-bold">{{ $harga }}</span>
                </li>
            </ul>
        </div>

        <!-- Detail Desc -->
        <p class="text-xs font-normal text-darkoff text-start">
            {{ $deskripsi }}
        </p>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
               class="w-full text-xs flex justify-center items-center bg-primary font-medium border border-primary text-white px-2 py-1 rounded-md hover:text-primary hover:border hover:bg-transparent transition">
               Pelajari Sekarang
            </a>
        </div>
    </div>
</div>
<!-- Single Card End -->