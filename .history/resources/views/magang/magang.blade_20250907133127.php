<x-guest-layout>
    @foreach (range(1,3) as $item)
        <x-card-magang
        logo="{{ asset('assets/logo/logo-wika.svg') }}"
        jobdesk="Petani"
        perusahaan="PT. Wika"
        lokasi="Jabar, Bantar Gebang"
        tanggalHabis="12/12/2012"
    />
    @endforeach
</x-guest-layout>