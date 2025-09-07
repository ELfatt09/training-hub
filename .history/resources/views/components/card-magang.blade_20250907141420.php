  {{-- Single Card --}}
        <div class="max-w-[17.5rem] h-[40vh] w-full flex flex-col justify-center space-y-4 px-4 border border-primary bg-white rounded-xl">
            {{-- Logo --}}
            <div class="flex items-center justify-center">
                <img class="w-24" src="{{ $logo }}" alt="">
            </div>

            {{-- Desc --}}
            <div class="capitalize">
                <div>
                    <h1>{{ $jobdesk }}</h1>
                </div>
                <div>
                    <h1>{{ $perusahaan }}</h1>
                </div>
                <div>
                    <h1>{{ $lokasi }}</h1>
                </div>
            </div>

            {{-- Status --}}
            <div class="flex text- justify-between">
                <div>
                    <h1>Berakhir <span>{{ $tanggalHabis }}</span></h1>
                </div>
                <div class="underline">
                    <a href="">Lihat Detail</a>
                </div>
            </div>

            {{-- Button --}}
            <div class="w-full">
                <a class="w-full flex justify-center items-center rounded-md text-white bg-primary px-4 py-2 hover:bg-transparent border border-primary transition-all hover:text-primary" href="">Ajukan Magang</a>
            </div>
        </div>
    {{-- Single Card --}}