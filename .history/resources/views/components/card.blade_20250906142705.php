<!-- Single Card -->
<div class="w-[70%] h-[30%] md:w-full md:h-[52vh] max-w-xs flex-shrink-0 bg-white shadow-lg rounded-2xl flex flex-col justify-evenly border border-primary mx-auto">
    <!-- Image -->
    <div class="w-full flex justify-center py-4 px-4">
        <img class="w-full h-full object-cover rounded-md" src="{{ $image }}" alt="">
    </div>

    <!-- Description -->
    <div class="p-2 space-y-2 md:space-y-4 px-4">
        <!-- Top -->
        <div class="space-y-1">
            <!-- Title -->
            <h1 class="text-md md:text-xl text-primary font-bold text-start">{{ $title }}</h1>

            <!-- Stats -->
            <ul class="flex flex-wrap justify-start gap-2 text-[.50rem] md:text-xs text-gray-600">
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
        <p class="text-[.70rem] md:text-[.9rem] font-normal text-darkoff text-start">
            {{ $deskripsi }}
        </p>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
               class="w-full text-[.6rem] md:text-[.9rem] flex justify-center items-center bg-primary font-medium border border-primary text-white md:px-4 py-1 md:py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition">
               Pelajari Sekarang
            </a>
        </div>
    </div>
</div>
<!-- Single Card End -->