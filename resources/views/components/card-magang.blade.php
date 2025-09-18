  {{-- Single Card --}}
        <div class="max-w-[17.8rem] h-fit py-4 w-full flex flex-col justify-center space-y-4 px-4 border border-primary bg-white rounded-xl">
            {{-- Logo --}}
            <div class="flex items-center justify-center">
                <img class="w-24" src="{{ asset("storage/".$lowonganmagang->company_logo) }}" alt="">
            </div>

            {{-- Desc --}}
            <div class="capitalize">
                <div>
                    <h1><i class="fa-solid fa-briefcase mr-2 text-secondary"></i> {{ $lowonganmagang->title }}</h1>
                </div>
                <div>
                    <h1><i class="fa-solid fa-building mr-3 text-secondary"></i> {{ $lowonganmagang->company_name }}</h1>
                </div>
                <div>
                    <h1><i class="fa-solid fa-location-dot mr-3 text-secondary"></i> {{ $lowonganmagang->residence }}</h1>
                </div>
            </div>

            {{-- Status --}}
            <div class="flex text-xs text-primary justify-between">
                <div class="font-bold">
                    <h1>Mulai Pada <span class="ml-1">{{ $lowonganmagang->start_date }}</span></h1>
                </div>
                <div class="underline font-semibold">
                    <a href="">Lihat Detail</a>
                </div>
            </div>

            {{-- Button --}}
            <div class="w-full">
                <a class="w-full flex justify-center items-center rounded-md text-white bg-primary px-4 py-2 hover:bg-transparent border border-primary transition-all hover:text-primary" href="">Ajukan Magang</a>
            </div>
        </div>
    {{-- Single Card --}}