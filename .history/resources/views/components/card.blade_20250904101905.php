  <!-- Single Card -->
<div class="max-w-[22rem] bg-white shadow-md rounded-lg overflow-hidden border border-primary">
    <!-- Image -->
        <div class="w-full flex justify-center items-center py-4">
            <img class="w-11/12 h-48 object-cover rounded-md" src="{{ $image }}" alt="">
        </div>

    <!-- Description -->
    <div class="p-4 space-y-4">
        <!-- Top -->
        <div class="space-y-2">
            <!-- Title -->
            <h1 class="text-2xl text-primary font-bold">{{ $title }}</h1>

            <!-- Stats -->
            <ul class="flex gap-4 text-sm text-gray-600">
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
        <p class="text-gray-700">
            {{ $deskripsi }}
        </p>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
           class="w-full flex justify-center items-center bg-primary font-medium border border-primary text-white px-4 py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition">
           Pelajari Sekarang
        </a>
        </div>
    </div>
</div>
<!-- Single Card End -->