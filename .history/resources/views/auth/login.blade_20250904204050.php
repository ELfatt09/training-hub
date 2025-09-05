<x-guest-layout>
    <section class="w-full flex py-12 md:h-screen">
        <!-- Left Side -->
        <div class="lg:w-1/2 flex flex-col justify-center md:h-screen space-y-4 md:space-y-8 px-6
        md:px-12">
            <!-- Upper -->
            <div class="space-y-6">
                <!-- logo -->
                <div>
                    <img class="w-1/2 md:w-1/4" src='assets/logo/favicon/logo-trainingHub.svg' alt="">
                </div>

                <div>
                    <!-- Text-->
                    <div class="text-2xl text-gray-500 font-bold leading-tight
                    lg:text-7xl">
                        Halo, <br class="hidden md:block"> Silahkan <span class="text-primary">Masuk.</span>
                    </div>

                    <h3 class="text-gray-500 font-medium text-sm md:text-md">Silahkan masuk dengan akun yang sudah terdaftar</h3>
                </div>
            </div>

            <!-- Middle -->
            <div>
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-2 md:space-y-4 w-full">
                    @csrf
                    
                    <!-- Email -->
                    <x-text-input id="email" class="font-medium w-full md:w-3/4 px-4 py-2 border-2 border-primary rounded-md 
                        focus:border-secondary focus:ring-0 focus:ring-transparent"
                        type="email" name="email" :value="old('email')" placeholder="Email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Password -->
                    <x-text-input id="password" class="font-medium w-full md:w-3/4 px-4 py-2 border-2 border-primary rounded-md 
                        focus:border-secondary focus:ring-0 focus:ring-transparent"
                        type="password" name="password" placeholder="Kata Sandi"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <!-- Remember -->
                    <div class="flex w-full md:w-3/4 justify-between items-center">
                        <div class="flex gap-2 items-center">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="text-primary focus:outline-0 focus:ring-0 rounded-sm md:text-md">
                            <label for="remember_me">Ingat Saya</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-primary underline" href="{{ route('password.request') }}">
                                Lupa Kata Sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Button -->
                    <div class=" mt-20 space-y-8">
                        <x-primary-button class="mt-10 bg-primary px-7 py-4 rounded-xl text-white text-[1.7rem] font-bold  
                            border border-primary hover:border-primary hover:bg-transparent hover:text-primary transition w-max tracking-normal">
                            Masuk
                        </x-primary-button>

                        <h3 class="font-medium">
                            Belum punya akun? 
                            <a href="{{ route('register') }}" class="underline text-primary font-medium">
                                Daftar sekarang
                            </a>
                        </h3>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side -->
        <div class="hidden md:flex lg:w-1/2 h-full p-2">
            <img class="w-full h-full object-cover rounded-xl bg-primary" src="assets/sign-in.png" alt="">
        </div>
    </section>
</x-guest-layout>