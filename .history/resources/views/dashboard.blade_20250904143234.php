<x-app-layout class="w-full scroll-smooth">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <!-- Hero Section -->
    <section id="beranda" class="flex h-fit md:h-[70vh] w-full font-jakarta bg-milk">
        <!-- Left Side -->
        <div class="h-full py-16 md:py-56 w-full px-6 md:w-1/2 md:px-20 space-y-12">
            <div class="space-y-6 text-center">
                <h1 class="text-primary text-2xl md:text-7xl font-semibold">Lorem Ipsum</h1>
                <h2 class="text-black text-lg md:text-6xl font-semibold line-clamp-2">Dolor sit amet Consectetur Elit</h2>
                <p class="text-sm md:text-md font-medium text-darkoff">
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                </p>
            </div>
            <div class="md:grid grid-cols-3 place-items-center">
                <x-button.primary href="#">Lorem Ipsum</x-button.primary>
                <h1 class="hidden md:block text-xl font-medium">Lorem ipsum dolor sit amet.</h1>
                <x-button.icon href="#program" icon="fa-arrow-down-long" />
            </div>
        </div>

        <!-- Right Side -->
        <div class="hidden md:flex flex-col justify-end mt-60 px-20 w-1/2 h-[50vh]">
            <img class="w-full h-5/6 shadow-solid-teal rounded-md" src="https://picsum.photos/id/0/200/300" alt="Hero Image">
            <div class="bg-white px-4 py-2 shadow-lg absolute top-32 right-10 rounded-md">
                <h1 class="text-xl">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="grid grid-cols-4 font-jakarta">
                @foreach(range(1, 4) as $i)
                    <x-stat number="500+" label="Lorem Ipsum" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Infinite Carousel -->
    <x-carousel :logos="['logo-telkom.svg', 'logo-denso.svg', 'logo-klik.svg', 'logo-sinarmas.svg', 'logo-wika.svg']" />

    <!-- Program Kejuruan -->
    <x-section id="kejuruan" title="Program Kejuruan Kami" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <x-swiper :items="range(1, 8)" />
        <x-button.primary href="#">Lihat seluruh kejuruan</x-button.primary>
    </x-section>

    <!-- Pelatihan Unggulan -->
    <x-section id="pelatihan" title="Pelatihan Unggulan Kami" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(range(1, 3) as $i)
                <x-card.training
                    image="https://picsum.photos/id/1084/536/354?grayscale"
                    title="Lorem Ipsum"
                    lessons="11 Pelajaran"
                    status="Online"
                    price="Gratis"
                    description="Lorem ipsum dolor sit amet consectetur elit."
                />
            @endforeach
        </div>
        <x-button.primary href="#">Pelajari lebih lanjut</x-button.primary>
    </x-section>

    <!-- User Testimonials -->
    <x-section id="katapengguna" title="Apa Kata Pengguna Kami?" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <div class="hidden md:grid grid-cols-2 gap-4">
            @foreach(range(1, 4) as $i)
                <x-comment-card
                    username="User {{ $i }}"
                    status="Designer at Google"
                    comment="Lorem ipsum dolor sit amet, consectetur adipisicing elit."
                />
            @endforeach
        </div>
    </x-section>

    <!-- Call to Action -->
    <x-cta
        background="assets/backgroundCTA.png"
        title="Lorem Ipsum Dolor Sit Amet Conse."
        description="Corem ipsum dolor sit amet, consectetur adipiscing elit."
        :buttons="[
            ['text' => 'Ikuti Pelatihan', 'href' => '#'],
            ['text' => 'Jelajahi Lowongan Magang', 'href' => '#']
        ]"
        :info="[
            'Proses pendaftaran mudah',
            'Proses pendaftaran mudah'
        ]"
    />

    <!-- Articles -->
    <x-section id="artikel" title="Artikel Kami">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach(range(1, 3) as $i)
                <x-article
                    image="https://picsum.photos/id/1011/400/250"
                    tag="Teknologi"
                    time="2 Jam yang lalu"
                    title="Lorem Ipsum Dolor Sit Amet"
                    description="Lorem Ipsum is simply dummy text of the printing and typesetting industry."
                />
            @endforeach
        </div>
        <x-button.primary href="#">Lihat Artikel Lainnya</x-button.primary>
    </x-section>

</x-app-layout>
