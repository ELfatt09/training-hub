<x-guest-layout>
    <div class="grid grid-cols-2">
        <div class="col-span-1 w-full pl-12">
            {{-- Top --}}
                <div class="flex w-full items-center justify-between border-2 border-primary py-2 px-4 rounded-md shadow-md">
                    <div class="flex gap-4 text-primary">
                        <h1 class="font-semibold text-xl">Lorem Ipsum</h1>
                        <div class="text-white bg-primary px-2 rounded-md">
                            <h1><span>50</span> Materi</h1>
                        </div>
                    </div>

                    <div class="flex w-1/3 gap-2 justify-center">
                        <h1 class="flex gap-1">
                            <span>1</span>
                             dari 
                             <span>50</span> 
                             Materi
                        </h1>

                        <div class="flex w-full items-center">
                            <div class="w-full bg-teal-200 rounded-full h-3 overflow-hidden flex items-center">
                                <div class="bg-primary h-4 rounded-full w-[30%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- Top --}}

            {{-- Materi --}}
        </div>

        <div class="col-span-1">

        </div>
    </div>
</x-guest-layout>