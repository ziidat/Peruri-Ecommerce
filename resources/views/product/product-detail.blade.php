<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- 1.0 Priview --}}
    <div class="w-screen p-3 bg-white border fixed-bottom">
        <div class="flex justify-between">
            <button type="button"
                class="inline-block px-6 py-2 text-xs font-medium leading-tight text-green-500 uppercase transition duration-150 ease-in-out border-2 border-green-500 rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0">
                <img src="{{ asset('images/logo/whatsapp.svg') }}" class="inline-block w-6 h-6 mr-2 text-green-500">
                Hubungi
                Penjual </button>
            <button type="button"
                class="inline-block rounded bg-blue-400 px-6 py-2.5 text-sm font-medium leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-500 hover:shadow-lg focus:bg-blue-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-600 active:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 mr-2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>Keranjang
            </button>
            <button></button>
        </div>
    </div>
    <div class="py-2 bg-white shadow-md max-w-7xl">
        {{-- 1.1 Priview Image --}}
        <div class="w-screen">
            <img class="object-cover w-full h-full" src="{{ asset('images/item/laptop.jpg') }}">
        </div>
        {{-- 1.2 Harga --}}
        <div class="px-3 py-1 mt-3">
            <div class="flex justify-between">
                <h5 class="inline-block mb-2 text-xl font-bold leading-tight text-gray-900">Rp.18.350.000
                </h5>
                <div class="inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="inline-block w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
            </div>
        </div>
        {{-- 1.3 Judul Barang --}}
        <div class="px-3 py-1">
            <div class="flex justify-start">
                <span class="inline-block mb-2 text-base font-normal leading-tight text-gray-700">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Adipisci, deleniti ex similique harum veniam dolor?
                </span>
            </div>
        </div>
        {{-- 1.4 variasi Dll --}}
        <div class="flex justify-between">
            <div class="flex justify-start px-3 my-auto">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    class="inline-block w-5 h-5 text-yellow-500 fill-current">
                    <path
                        d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                    </path>
                </svg>
                <span class="text-sm font-bold text-gray-800">4.8 | <span class="font-semibold text-blue-500">45</span>
                    Terjual</span>
            </div>
            <div class="flex justify-start px-3 my-auto">
                <div class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="inline-block w-5 h-5 text-gray-800">
                        <path fill-rule="evenodd"
                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-light text-gray-800">Karawang</span>
                </div>
            </div>
        </div>
        {{-- 1.5 Button --}}
    </div>
    {{-- 2.0 Lokasi & Pengiriman --}}
    <div class="py-2 my-2 bg-white shadow-md max-w-7-xl">
    </div>
    {{-- 3.0 Detail & Spesifikasi Produk --}}
    <div class="py-2 my-2 bg-white shadow-md max-w-7-xl">
        <div class="px-3 py-1 mt-3">
            <h5 class="inline-block w-full mb-4 text-lg font-bold leading-tight text-gray-900">Detail Produk
            </h5>
            {{-- 3.1 Detail Singkat Spesifikasi --}}
            <div class="grid grid-flow-row grid-cols-2 gap-3">
                <span class="text-sm leading-tight text-gray-800">Stok</span>
                <span class="text-sm font-light text-gray-500">100</span>
                <span class="text-sm leading-tight text-gray-800">Kondisi</span>
                <span class="text-sm font-light text-gray-500">Baik</span>
                <span class="text-sm leading-tight text-gray-800">Kategori</span>
                <span class="text-sm font-light text-gray-500">Elektronik</span>
                <span class="text-sm leading-tight text-gray-800">Merk</span>
                <span class="text-sm font-light text-gray-500">EOG</span>
            </div>
        </div>
    </div>
</x-app-layout>
