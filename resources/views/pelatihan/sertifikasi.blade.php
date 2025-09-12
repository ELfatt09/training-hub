<x-app-layout>
    <section class="w-full pt-36 bg-milk flex justify-center items-center h-fit py-6">
        <span class="inline-block bg-gray-300 h-[26rem] w-[42rem]"></span>
    </section>

    <section class="w-full font-medium">
        <div>
            <img src="" alt="">
        </div>

        <div class="grid grid-cols-8 px-16 py-6">
            <div class="col-span-6 space-y-6">
                <div class="border-2 border-gray rounded-2xl p-4 space-y-4">
                    <div class="font-semibold text-4xl max-w-2xl">
                        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit dicta</h1>
                    </div>

                    <div class="flex gap-4 items-center text-md">
                        <h1>
                            <span class="text-secondary">Badge ID</span> 088888888888888888888
                        </h1>

                        <h1 class="flex items-center gap-2 text-primary hover:text-secondary">
                            Lihat di Badgr <i class="fa-regular fa-arrow-up-right-from-square text-xs"></i>
                        </h1>
                    </div>

                    <span class="inline-block h-[1.5px] w-full bg-gray-200"></span>

                    <div class="flex items-center justify-between">
                        <div class="flex gap-4">
                            <span class="inline-block bg-gray-300 h-12 w-20 rounded-md"></span>

                            <div>
                                <h1>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </h1>

                                <h1 class="uppercase text-primary font-medium">
                                    Gratis
                                </h1>
                            </div>
                        </div>

                        <div>
                            <a class="px-4 py-2 bg-primary border border-primary hover:bg-transparent hover:text-primary transition-all rounded-md text-white" href="">Lihat Kelas</a>
                        </div>
                    </div>
                </div>

                <div class="p-4 text-xl text-darkoff rounded-xl bg-gray-300">
                    <h1 class="flex items-center"><i class="fa-duotone fa-solid fa-circle-info mr-2 text-lg" style="--fa-primary-color: #ffffff; --fa-primary-opacity: 1; --fa-secondary-color: #666666;"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, nam!</h1>
                </div>

                <div class="flex items-center gap-3 border-2 border-gray-300 px-4 py-2 rounded-md justify-center">
                     @foreach (['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-adf.svg', 'logo-bnp.svg', 'logo-citraHusada.svg', 'logo-kirana.svg'] as $logo)
                        <img src="{{ asset('assets/logo/' . $logo) }}" class="h-16 w-[4.4rem] object-contain" alt="sponsor">
                        <i class="fa-solid fa-star-of-life text-md text-primary"></i>
                    @endforeach
                        <img src="{{ asset('assets/logo/logo-wika.svg') }}" class="h-16 w-[4.4rem] object-contain" alt="sponsor">
                </div>

            </div>

            <div class="col-span-2 border-2 border-gray-300 rounded-2xl ml-8 py-2 space-y-2">
                <div class="w-full gap-2 flex flex-col justify-center items-center">
                    <span class="inline-block w-24 h-24 rounded-full bg-gray-300"></span>
                    <h1 class="text-3xl font-bold">Lorem Ipsum</h1>
                </div>

                <div class="space-y-2">
                    <div class="font-semibold w-full flex flex-col justify-center items-center">
                        <h1 class="text-darkoff text-xl">Diberikan Pada</h1>
                        <h1>5 Jan, 2025</h1>
                    </div>
                    <div class="font-semibold w-full flex flex-col justify-center items-center">
                        <h1 class="text-darkoff text-xl">Berlaku Sampai</h1>
                        <h1>5 Jan, 2028</h1>
                    </div>
                </div>

                <div class="w-full flex flex-col justify-center items-center space-y-2">
                    <a 
                    download="" 
                    href=""
                    class="bg-primary text-white border border-primary hover:bg-transparent hover:text-primary px-4 py-2 w-1/2 flex justify-center items-center gap-2 rounded-md transition-all font-semibold">
                        <i class="fa-regular fa-arrow-down-to-bracket text-sm"></i> Unduh
                    </a>
                    <a 
                    download="" 
                    href=""
                    class="bg-primary text-white border border-primary hover:bg-transparent hover:text-primary px-4 py-2 w-1/2 flex justify-center items-center gap-2 rounded-md transition-all font-semibold">
                        <i class="fa-regular fa-share-nodes"></i> Bagikan
                    </a>
                </div>

                <div class="w-full flex flex-col justify-center items-center px-4">
                    <span class="mt-2 inline-block h-[1px] bg-gray-300 w-full"></span>
                    <a class="mt-2 text-primary hover:text-secondary" href="">Lihat Profile Lengkap <i class="fa-regular fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>