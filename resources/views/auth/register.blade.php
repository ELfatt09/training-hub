<x-guest-layout>
    <section class="w-full flex h-screen font-plusJakarta">
        <!-- Right Side -->
        <div class="w-1/2 h-full p-2">
            <img class="w-full h-full object-cover rounded-xl" src="{{ asset('assets/image17.png') }}" alt="">
        </div>

        <!-- Left Side -->
        <div class="w-1/2 flex flex-col justify-center h-screen space-y-4 px-12">
            <!-- Upper -->
            <div class="space-y-4">
                <!-- logo -->
                <div>
                    <img class="w-1/4" src="{{ asset('assets/logo/favicon/logo-trainingHub.svg') }}" alt="">
                </div>

                <div>
                    <div class="text-7xl text-gray-500 font-bold">
                        Hai, <br> Silahkan <span class="text-primary">Daftar.</span>
                    </div>
                    <h3 class="text-gray-500 font-medium">
                        Silahkan daftarkan akun baru dengan mengisi kolom yang tersedia.
                    </h3>
                </div>
            </div>

            <!-- Middle -->
            <div>
                <form id="register-form" method="POST" action="{{ route('register') }}" class="flex flex-col space-y-2 w-full">
                    @csrf
                    <!-- Email -->
                    <input name="email" type="email"
                        class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md focus:border-secondary focus:ring-0"
                        placeholder="Email" required>

                    <!-- Username -->
                    <input name="name" type="text"
                        class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md focus:border-secondary focus:ring-0"
                        placeholder="Nama Pengguna" required>

                    <!-- Password -->
                    <input name="password" type="password"
                        class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md focus:border-secondary focus:ring-0"
                        placeholder="Kata Sandi" required>

                    <!-- Confirm Password -->
                    <input name="password_confirmation" type="password"
                        class="font-medium w-5/6 px-4 py-2 border-2 border-primary rounded-md focus:border-secondary focus:ring-0"
                        placeholder="Konfirmasi Kata Sandi" required>
                    
                    <!-- Remember -->
                    <div class="flex mt-2 w-5/6 justify-between items-center">
                        <div class="flex gap-2 items-center">
                            <input class="text-primary rounded-sm" type="checkbox" name="terms" id="terms">
                            <label for="terms">Saya setuju dengan <a href="#" class="text-primary underline">Syarat & Ketentuan</a></label>
                        </div>

                        <div>
                            <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                                Lupa Kata Sandi?
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Bottom -->
            <div class="flex flex-col mt-24 space-y-8">
                <!-- Register Button -->
                <div>
                    <button type="submit"
                        form="register-form"
                        class="bg-primary px-4 py-2 rounded-md text-white text-2xl font-medium border border-primary hover:bg-transparent hover:text-primary transition">
                        Daftar
                    </button>
                </div>

                <!-- Last -->
                <div>
                    <h3 class="font-medium">Sudah punya akun?
                        <a href="{{ route('login') }}" class="underline text-primary font-medium">Masuk sekarang</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
