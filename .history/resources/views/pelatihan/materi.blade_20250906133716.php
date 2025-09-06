<x-guest-layout>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <div class="grid grid-cols-3 bg-milk">
        <div class="col-span-2 w-full pl-12 pr-4 bg-white">
            {{-- Top --}}
                <div class="flex w-full items-center justify-between border-2 border-primary py-2 px-4 rounded-md shadow-md mb-4">
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
                <div class="space-y-4">
                    {{-- Title --}}
                    <div class="text-xl font-bold">
                        <h1>1.1 Sinopsis</h1>
                    </div>

                    {{-- Vid --}}
                    <div class="border-2 border-primary rounded-md">
                        <video controls src="https://storage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"></video>
                    </div>

                    {{-- Desc --}}
                    <div class="space-y-4 font-medium text-darkoff text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                    </div>
                </div>
            {{-- Materi --}}
        </div>

        <div class="col-span-1 bg-white">
            {{-- Serach --}}
            <form class="w-full" action="">
                <input class="w-full rounded-md border-2 border-primary focus:border-primary focus:outline-secondary focus:ring-secondary" placeholder="Cari Materi..." type="text">
            </form>

            {{-- Section 1 --}}
            <div>
                <div id="accordion-open" data-accordion="open" class="w-full mx-auto mt-6">
                    <div id="accordion-open-heading-1">
                        <button type="button" 
                            class="flex items-center justify-between w-full p-4 font-medium text-left text-gray-700 bg-white border-primary border rounded-md"
                            data-accordion-target="#accordion-open-body-1" 
                            aria-expanded="true" 
                            aria-controls="accordion-open-body-1">
                            
                            {{-- Title & Description --}}
                            <div class="flex items-center gap-3 text-primary">
                                    {{-- Title --}}
                                    <div class="text-xl font-semibold">
                                        <h1>Sinopsis & Bonus</h1>
                                    </div>
                            </div>

                            <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>

                    <div href="" id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                        <a>1.1 Sinopsis</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>