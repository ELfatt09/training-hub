<!-- Single Card -->
<div class="w-[70%] h-[30%] md:w-full md:h-[52vh] max-w-xs flex-shrink-0 bg-white shadow-lg rounded-2xl flex flex-col justify-evenly border border-primary mx-auto">
    <!-- Image -->
    <div class="w-full flex justify-center py-4 px-4">
        <img class="w-full h-full object-cover rounded-md" src="{{ $image }}" alt="">
    </div>

    <!-- Description -->
    <div class="p-2 space-y-2 md:space-y-4 px-4">
        <!-- Top -->
            <!-- Title -->
<<<<<<< HEAD
            <h1 class="text-md md:text-xl text-primary font-bold text-start">{{ $title }}</h1>
=======
            <h1 class="text-xl text-primary font-bold text-start px-1 py-2 space-y-2">{{ $title }}</h1>
>>>>>>> 5366bcf69127bbadf3db44b67f8525aabfc41795

        
            <!-- Stats -->
<<<<<<< HEAD
            <ul class="flex flex-wrap justify-start gap-2 text-[.50rem] md:text-xs text-gray-600">
=======
            <div  class="flex-col space-y-7">
            <div class="flex-col space-y-2">
            <ul class="flex flex-wrap justify-start space-x-8 text-sm text-black p-2">
>>>>>>> 5366bcf69127bbadf3db44b67f8525aabfc41795
                <li>
                    <i class="fa-solid fa-book"></i> <span class="font-bold">{{ $pelajaran }}</span>
                </li>
                <li>
                    <i class="fa-solid fa-wifi"></i> <span class="font-bold">{{ $status }}</span>
                </li>
                <li>
                    <span class="text-primary font-bold">{{ $harga }}</span>
                </li>
            </ul>
            

        <!-- Detail Desc -->
<<<<<<< HEAD
        <p class="text-[.70rem] md:text-[.9rem] font-normal text-darkoff text-start">
            {{ $deskripsi }}
=======
        <p class="text-sm font-normal text-black text-start p-2 leading-[1.5]">
            {{ Str::limit($deskripsi, 100) }}
>>>>>>> 5366bcf69127bbadf3db44b67f8525aabfc41795
        </p>
            </div>

        <!-- Button -->
        <div class="w-full">
            <a href="#" 
<<<<<<< HEAD
               class="w-full text-[.6rem] md:text-[.9rem] flex justify-center items-center bg-primary font-medium border border-primary text-white md:px-4 py-1 md:py-2 rounded-md hover:text-primary hover:border hover:bg-transparent transition">
=======
               class="p-2 w-full text-sm flex justify-center items-center bg-transparent   text-primary border-primary border hover:bg-primary hover:text-white font-bold rounded-md hover:border hover:bg-transparent transition">
>>>>>>> 5366bcf69127bbadf3db44b67f8525aabfc41795
               Pelajari Sekarang
            </a>
        </div>
    </div>
    </div>
</div>
<!-- Single Card End -->