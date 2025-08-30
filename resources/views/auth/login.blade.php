<x-app-layout>
    <section class="w-full flex h-screen">
        <!-- Left Side -->
        <div class="w-1/2 flex flex-col justify-center h-screen space-y-4 px-12">
            <!-- Upper -->
            <div class="space-y-4">
                <!-- logo -->
                <div>
                    <img class="w-1/4" src='assets/logo/favicon/logo-trainingHub.svg' alt="">
                </div>

                <div>
                    <!-- Text-->
                    <div class="text-7xl text-gray-500 font-bold">
                        Halo, <br> Silahkan <span class="text-primary">Masuk.</span>
                    </div>

                    <h3 class="text-gray-500 font-medium">Silahkan masuk dengan akun yang sudah terdaftar</h3>
                </div>
            </div>

            <!-- Middle -->
            <div>
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-2 w-full">
                    @csrf
                    
                    <!-- Email -->
                    <x-text-input id="email" class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md 
                        focus:border-secondary focus:ring-0 focus:ring-transparent"
                        type="email" name="email" :value="old('email')" placeholder="Email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <!-- Password -->
                    <x-text-input id="password" class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md 
                        focus:border-secondary focus:ring-0 focus:ring-transparent"
                        type="password" name="password" placeholder="Kata Sandi"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <!-- Remember -->
                    <div class="flex mt-2 w-5/6 justify-between items-center">
                        <div class="flex gap-2 items-center">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="text-primary focus:outline-0 focus:ring-0 rounded-sm">
                            <label for="remember_me">Ingat Saya</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-primary underline" href="{{ route('password.request') }}">
                                Lupa Kata Sandi?
                            </a>
                        @endif
                    </div>

                    <!-- Button -->
                    <div class="flex flex-col mt-12 space-y-8">
                        <x-primary-button class="bg-primary px-4 py-2 rounded-md text-white text-2xl font-medium 
                            border border-primary hover:bg-transparent hover:text-primary transition w-5/6">
                            {{ __('Masuk') }}
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
        <div class="w-1/2 h-full p-2">
            <img class="w-full h-full object-cover rounded-xl" src="{{ asset('assets/image 17.png') }}" alt="">
        </div>
    </section>
</x-app-layout>