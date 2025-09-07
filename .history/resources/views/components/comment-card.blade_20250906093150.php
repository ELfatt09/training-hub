<!-- Single Card -->
                 <div class="px-6 py-4 border-2 max-w-xl md:w-full border-primary rounded-xl">
                    <!-- Profile -->
                     <div class="flex items-center gap-4 mb-6">
                        <span class="inline-block w-12 h-12 bg-primary rounded-full"></span>
                        <!-- Name -->
                        <div>
                            <h1 class="text-md lg:text-xl font-bold text-primary">{{ $username }}</h1>
                            <p class="text-gray-500 text-sm lg:text-md">{{ $status }}</p>
                        </div>
                     </div>
                     <!-- Comment -->
                      <div>
                        <p class="text-xs w-full max-w-[15rem] md:w-full lg:text-lg line-clamp-3 lg:line-clamp-none">{{ $comment }}</p>
                      </div>
                 </div>
                <!-- Single Card End -->
