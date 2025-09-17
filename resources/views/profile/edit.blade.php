<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="pt-20 mb-8 pl-20 text-4xl font-semibold text-darkoff">
        <h1>Ubah Profil</h1>
    </div>

    <div class="grid grid-cols-5 gap-6 mb-24">
        <!-- Tabs Parent -->
        <div class="col-span-1" data-tabs-toggle="#tabContents" role="tablist">
            <ul class="border border-darkoff flex flex-col space-y-4 text-sm font-medium bg-white text-gray-500 rounded-lg ml-20">
                    <li>
                        <button id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="true"
                                class="rounded-t-lg inline-flex items-center px-4 pt-2 pb-1 w-full
                                    text-black
                                    aria-[selected=true]:text-black
                                    aria-[selected=true]:bg-[#CDDEDE]
                                    aria-[selected=true]:border-l-2
                                    aria-[selected=true]:border-primary">
                            <i class="fa-solid fa-user mr-2"></i> Detail Profile
                        </button>
                    </li>
                    <li>
                        <button id="password-tab" data-tabs-target="#password" type="button" role="tab"
                                aria-controls="password" aria-selected="false"
                                class="inline-flex items-center px-4 py-1 h-fit w-full
                                    aria-[selected=true]:text-black
                                    aria-[selected=true]:bg-[#CDDEDE]
                                    aria-[selected=true]:border-l-2
                                    aria-[selected=true]:border-primary">
                            <i class="fa-solid fa-key mr-2"></i> Kata Sandi
                        </button>
                    </li>
                    <li>
                        <button id="information-tab" data-tabs-target="#information" type="button" role="tab"
                                aria-controls="information" aria-selected="false"
                                class="rounded-b-lg inline-flex items-center px-4 pt-1 pb-2 w-full
                                    aria-[selected=true]:text-black
                                    aria-[selected=true]:bg-[#CDDEDE]
                                    aria-[selected=true]:border-l-2
                                    aria-[selected=true]:border-primary">
                            <i class="fa-solid fa-circle-info mr-2"></i> Informasi Akun
                        </button>
                    </li>
                </ul>
        </div>

        <!-- Tab Contents Parent -->
        <div id="tabContents" class="col-span-4 pr-20">
            <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="w-full p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div id="password" role="tabpanel" aria-labelledby="password-tab" class="hidden p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <div id="information" role="tabpanel" aria-labelledby="information-tab" class="hidden p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
