<x-guest-layout>
    <div class="grid grid-cols-2">
        <div class="col-span-1 w-full pl-12">
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
                    <div class="text-2xl font-bold">
                        <h1><span class="text-sm">1.1</span> Sinopsis</h1>
                    </div>

                    {{-- Vid --}}
                    <div class="border-2 border-primary rounded-md">
                        <video controls src="https://storage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"></video>
                    </div>

                    {{-- Desc --}}
                    <div class="space-y-4 font-medium text-darkoff">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.</p>
                        <p>Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                    </div>
                </div>
            {{-- Materi --}}
        </div>

        <div class="col-span-1">

        </div>
    </div>
</x-guest-layout>