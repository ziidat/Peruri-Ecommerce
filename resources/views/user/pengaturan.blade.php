<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan') }}
        </h2>
    </x-slot>
    <div class="flex justify-center mx-20 mt-10">
        @include('layouts.sidebar.user-menu')
        <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full drop-shadow-md">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2">Biodata Diri</h5>
            <div class="flex flex-wrap justify-start p-4 w-full">
                {{-- Form ganti foto --}}
                <div class="max-w-sm mr-4 basis-2/5">
                    <div class="rounded-lg shadow-lg drop-shadow-md bg-white max-w-sm">
                        <div class="px-6 py-4 max-w-80 max-h-72">
                            <img class="rounded-md object-cover w-80 h-72" src="{{ asset('images/man.svg') }}" alt="" />
                        </div>
                        <div class="p-6">
                            <div class="flex justify-center items-center">
                                <button type="btn"
                                    class="text-gray-900 text-md font-medium mb-2 mx-auto border-2 px-4 py-1 w-full rounded-md">Ubah
                                    Foto</button>
                            </div>
                            <p class="text-gray-700 text-xs pt-4 mb-4">
                                Besar file: maksimum 10.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG
                                .JPEG
                                .PNG
                            </p>
                        </div>
                    </div>
                    {{-- End Form Ganti Foto --}}
                    {{-- Button --}}
                    <div class="grid grid-flow-row grid-rows-2 mt-2 p-4 w-full">
                        <button type="btn"
                            class="text-gray-900 text-md font-medium mb-2 mx-auto border-2 px-4 py-1 rounded-md w-full">Ubah
                            Kata Sandi</button>
                        <button type="btn"
                            class="text-gray-900 text-md font-medium mb-2 mx-auto border-2 px-4 py-1 rounded-md w-full">Ubah
                            Pin</button>
                    </div>
                    {{-- End Button --}}
                </div>
                {{-- Data Diri --}}
                <div class="block basis-1/2">
                    <div class="block p-6 rounded-lg bg-white">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2">Ubah Biodata Diri</h5>
                        <div class="flex flex-non py-3">
                            <p class="basis-1/3 text-sm text-gray-700">Nama</p>
                            <p class="flex-auto text-sm">{{ Auth::user()->name }}<a href="#" class="text-cyan-500 ml-2">Ubah</a> </p>
                        </div>
                        <div class="flex flex-non py-3">
                            <p class="basis-1/3 text-sm text-gray-700">NP</p>
                            <p class="flex-auto text-sm">{{ Auth::user()->NP }}</p>
                        </div>
                        <div class="flex flex-none py-3">
                            <p class="basis-1/3 text-sm text-gray-700">Tanggal Lahir</p>
                            <p class="flex-auto text-sm">20-05-1999  <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                        <div class="flex flex-none py-3">
                            <p class="basis-1/3 text-sm text-gray-700">Jenis Kelamin</p>
                            <p class="flex-auto text-sm">Laki-Laki  <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                    </div>
                    <div class="block p-6 rounded-lg bg-white">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2">Kontak</h5>
                        <div class="flex flex-non py-3">
                            <p class="basis-1/3 text-sm text-gray-700">E - Mail</p>
                            <p class="flex-auto text-sm">{{ Auth::user()->email }} <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                        <div class="flex flex-none py-3">
                            <p class="basis-1/3 text-sm text-gray-700">Nomor HP</p>
                            <p class="flex-auto text-sm">0813-1646-1691  <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                    </div>
                    <div class="block p-6 rounded-lg bg-white">
                        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2">Alamat</h5>
                        <div class="flex flex-non py-3">
                            <p class="basis-1/3 text-sm text-gray-700">Alamat</p>
                            <p class="flex-auto text-sm">Puri Teluk Jambe Blok C  <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                        <div class="flex flex-none py-3">
                            <p class="basis-1/3 text-sm text-gray-700">COD</p>
                            <p class="flex-auto text-sm">Karawang Sekitarnya  <a href="#" class="text-cyan-500 ml-2">Ubah</a></p>
                        </div>
                    </div>
                    <div class="flex space-x-2 justify-center">
                        <button
                          type="button"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                        >Ubah Data</button>
                      </div>
                </div>
                {{-- End Data Diri --}}
            </div>
        </div>
    </div>
</x-app-layout>
