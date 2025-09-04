<x-guest-layout>
    <section class="w-full flex flex-row-reverse h-screen">
        <!-- Left Side -->
        <div class="w-1/2 flex flex-col justify-center  h-screen space-y-8 px-12">
            <!-- Logo + Intro -->
            <div class="space-y-6">
                <div>
                    <img class="w-1/4" src="assets/logo/favicon/logo-trainingHub.svg" alt="Logo">
                </div>

                <div>
                    <div class="text-7xl text-gray-500 font-bold leading-tight">
                        Hai, <br> Silahkan <span class="text-primary">Daftar.</span>
                    </div>
                    <h3 class="text-gray-500 font-medium">Buat akun baru untuk melanjutkan</h3>
                </div>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="flex flex-col space-y-2 w-full">
                @csrf

                <!-- Name -->
                <x-text-input id="name"
                    class="font-medium w-3/4 px-4 py-2 border-2 border-primary rounded-md
                    focus:border-secondary focus:ring-0"
                    type="text" name="name" :value="old('name')" placeholder="Nama Lengkap"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <!-- Email -->
                <x-text-input id="email"
                    class="font-medium w-3/4 px-4 py-2 border-2 border-primary rounded-md
                    focus:border-secondary focus:ring-0"
                    type="email" name="email" :value="old('email')" placeholder="Email"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->
                <x-text-input id="password"
                    class="font-medium w-3/4 px-4 py-2 border-2 border-primary rounded-md
                    focus:border-secondary focus:ring-0"
                    type="password" name="password" placeholder="Kata Sandi"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Confirm Password -->
                <x-text-input id="password_confirmation"
                    class="font-medium w-3/4 px-4 py-2 border-2 border-primary rounded-md
                    focus:border-secondary focus:ring-0"
                    type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <!-- Button -->
                    <div class=" mt-20 space-y-8">
                                            <x-primary-button class="mt-10 bg-primary px-7 py-4 rounded-xl text-white text-[1.7rem] font-bold  
                            border border-primary hover:border-primary hover:bg-transparent hover:text-primary transition w-max tracking-normal">

                        {{ __('Daftar') }}
                    </x-primary-button>

                    <h3 class="font-medium">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="underline text-primary font-medium">
                            Masuk sekarang
                        </a>
                    </h3>
                </div>
            </form>
        </div>

        <!-- Right Side (Image pakai URL) -->
        <div class="w-1/2 h-full p-2">
            <img class="w-full h-full object-cover rounded-xl bg-primary"
                 src="assets/sign-up.png"
                 alt="Background Register">
        </div>
    </section>
</x-guest-layout>
