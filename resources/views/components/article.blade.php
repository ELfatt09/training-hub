{{-- Single Card --}}
                    <div class="flex-shrink-0 snap-center w-[80%] relative md:w-full md:max-w-md h-40 md:h-80 rounded-xl overflow-hidden group shadow-lg">
                            <!-- Background Image -->
                            <img src="{{ $image }}" alt="card image" 
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                            <!-- Overlay Hover -->
                            <div class="absolute inset-0 bg-primary/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                            <!-- Content -->
                            <div class="absolute inset-0 flex flex-col justify-between p-4 text-white">
                                <!-- Genre/Tag -->
                                <span class="bg-primary text-[0.60rem] md:text-sm font-semibold px-3 py-1 rounded-full w-max">{{ $tag }}</span>

                                <!-- Title & Description -->
                                <div>
                                    <span class="bg-secondary text-[0.40rem] md:text-xs font-normal md:font-semibold px-3 py-1 rounded-full w-max mb-2">{{ $time }}</span>
                                    <h2 class="text-xs md:text-xl font-bold line-clamp-2">{{ $title }}</h2>
                                    <p class="text-[0.60rem] md:text-sm text-gray-200 line-clamp-2">{{ $description }}</p>
                                </div>
                            </div>
                    </div>
                {{-- Single Card End --}}