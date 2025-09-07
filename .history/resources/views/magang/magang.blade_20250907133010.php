<x-guest-layout>
            <div class="relative w-2/3 mx-auto py-6"> 
    <!-- Slider -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach( as $magang)
        <div class="swiper-slide w-fit">
          <div class="flex justify-center items-center mb-4">
            <img class="fill-primary stroke-primary h-20 w-auto " src="{{ asset('storage/'.$major->svg_icon) }}" />
          </div>
          <p class="text-base text-center font-semibold">{{ $major->title }}</p>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Prev Button -->
    <button class="custom-prev absolute top-1/2 -translate-y-1/2 -left-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
        <i class="fa-solid fa-chevron-left text-teal-600"></i>
    </button>

    <!-- Next Button -->
    <button class="custom-next absolute top-1/2 -translate-y-1/2 -right-10 bg-white p-3 rounded-full shadow hover:bg-teal-100">
        <i class="fa-solid fa-chevron-right text-teal-600"></i>
    </button>
</div>
</x-guest-layout>