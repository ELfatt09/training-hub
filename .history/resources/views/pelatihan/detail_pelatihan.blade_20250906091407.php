<x-app-layout>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    {{-- Main --}}
    <div class="w-full pt-36 pb-8 bg-milk">
        {{-- Tabs for sm --}}
        <div class="sm:block md:hidden">
            <div class="flex justify-around border-b">
                <button class="tab-button active" data-tab="tab-1">Detail</button>
                <button class="tab-button" data-tab="tab-2">Materi</button>
                <button class="tab-button" data-tab="tab-3">Komentar</button>
            </div>

            <div class="tab-content active" id="tab-1">
                {{-- Content for Detail --}}
                <div class="space-y-4 px-4">
                    <div class="w-full h-48">
                        <img class="object-cover w-full h-full rounded-lg" src="{{ asset('assets/dummyimage.png') }}" alt="Gambar">
                    </div>
                    <h1 class="text-2xl font-bold capitalize">Lorem ipsum dolor sit amet.</h1>
                    <div class="text-sm text-secondary">Lorem Ipsum</div>
                    <p class="text-darkoff text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula.
                    </p>
                </div>
            </div>

            <div class="tab-content hidden" id="tab-2">
                {{-- Content for Materi --}}
                <div class="space-y-4 px-4">
                    <h1 class="text-2xl font-semibold">Materi Kursus</h1>
                    <x-card-materi title="Lorem Ipsum" jenis="Video" bab="5 Bab" durasi="5 Jam" />
                </div>
            </div>

            <div class="tab-content hidden" id="tab-3">
                {{-- Content for Komentar --}}
                <div class="space-y-4 px-4">
                    <h1 class="text-2xl font-semibold">Komentar</h1>
                    <div>
                        <div class="flex gap-4 items-center">
                            <img class="w-9 h-9 rounded-full" src="{{ asset('assets/dummyimage.png') }}" alt="">
                            <div>
                                <h1 class="text-lg font-medium text-secondary">Lorem Ipsum</h1>
                                <div class="text-xs text-primary">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Grid for md and lg --}}
        <div class="hidden sm:hidden md:grid grid-cols-3 gap-4 px-4">
            <div class="col-span-2 space-y-4">
                {{-- Image --}}
                <div class="w-full h-48">
                    <img class="object-cover w-full h-full rounded-lg" src="{{ asset('assets/dummyimage.png') }}" alt="Gambar">
                </div>
                {{-- Title --}}
                <h1 class="text-3xl font-bold capitalize">Lorem ipsum dolor sit amet.</h1>
                {{-- Description --}}
                <p class="text-darkoff text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac elit eu nisi porttitor pulvinar a id ligula.
                </p>
            </div>
            <div class="col-span-1 space-y-4">
                {{-- Sidebar --}}
                <div class="bg-white p-4 rounded-lg">
                    <h1 class="font-semibold capitalize">Pelatihan ini menyediakan</h1>
                    <div class="text-darkoff"><i class="fa-solid fa-book"></i> Lorem Ipsum</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                const tabContainer = button.parentElement.parentElement;
                const tabContents = tabContainer.querySelectorAll('.tab-content');
                const tabButtons = tabContainer.querySelectorAll('.tab-button');

                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.add('hidden'));

                button.classList.add('active');
                tabContainer.querySelector(`#${button.dataset.tab}`).classList.remove('hidden');
            });
        });
    </script>
</x-app-layout>
