<x-guest-layout>
        {{-- Section 1 --}}
        <div class="inline-block w-full h-[12vh]">
        </div>
        <div class="relative overflow-hidden w-full h-[40vh]">
            <img 
            src="{{ asset('assets/topbg.svg') }}" 
            alt="Background"
            class="absolute inset-0 w-full h-full object-cover"
            >

            <div class="relative flex flex-col items-center justify-center h-full space-y-2">
                <div class="text-white font-bold text-4xl text-center capitalize">
                    <h1>Lorem ipsum dolor <br> sit amet consectetur</h1>
                </div>

                <div class="text-lg text-[#81ACAD]">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum repellat iusto? Deleniti, facere nemo?
                    </p>
                </div>

                <form class="relative space-x-3" action="">
                    <input placeholder="Temukan Tempat Magang..." type="text">
                    <select aria-placeholder="Klasifikasi..." name="" id="">
                        <option value="" disabled selected hidden>Klasifikasi...</option>
                        <option value="1">Klasifikasi 1</option>
                        <option value="2">Klasifikasi 2</option>
                        <option value="3">Klasifikasi 3</option>
                    </select>
                    <input placeholder="Masukkan Kota atau Wilayah..." type="text">
                </form>
            </div>
        </div>
    {{-- Section 1 --}}
</x-guest-layout>