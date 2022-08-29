<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- 1.0 Priview --}}
    <div class="max-w-7xl">
        {{-- 1.1 Priview Image --}}
        <div class="w-screen">
            <img class="h-full w-full object-cover" src="{{ asset('images/item/laptop.jpg') }}">
        </div>
        {{-- 1.2 Harga --}}
        <div class="mt-3 px-3 py-1">
            <div class="flex justify-between">
                <h5 class="inline-block mb-2 text-xl font-bold leading-tight text-gray-900">Rp.18.350.000
                </h5>
                <div class="inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                      </svg>
                </div>
            </div>
        </div>
        {{-- 1.3 Judul Barang --}}
        <div class="px-3 py-1">
            <div class="flex justify-start">
                <span class="inline-block mb-2 text-base font-semibold leading-tight text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, deleniti ex similique harum veniam dolor?
                </span>
            </div>
        </div>
        {{-- 1.4 variasi Dll --}}
        {{-- 1.5 Button --}}
    </div>
</x-app-layout>
