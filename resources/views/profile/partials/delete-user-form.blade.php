<section class="space-y-6">
    <header>
        <h2 class="text-2xl font-semibold text-gray-900">
            {{ __('Akun Terhubung') }}
        </h2>
    </header>

    <div class="bg-gray-300 p-6 rounded-xl space-y-2 font-medium">
        <h1>
            {{ __('Akun Traininghub Kamu') }}
        </h1>

        <div class="flex justify-between bg-white rounded-xl px-4 py-2">
            <div>
                <div class="font-semibold text-black text-md">
                    <h1>{{ $user->name }}</h1>
                </div>
                <div class="text-darkoff text-xs">
                    <h1>{{ $user->email }}</h1>
                </div>
            </div>

           <div class="flex items-center gap-4">
            <div>
                <div class="text-xs text-darkoff font-medium">
                    <h1>
                        {{ __('Dibuat Sejak') }}
                    </h1>
                </div>
                <div class="text-sm text-black font-medium">
                    <h1>
                        {{ __('17 Agustus 1945') }}
                    </h1>
                </div>
            </div>

             <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            ><i class="fa-solid fa-trash mr-2"></i> Hapus</x-danger-button>
           </div>
        </div>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
