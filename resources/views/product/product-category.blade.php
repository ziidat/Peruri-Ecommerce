@extends('layouts.app')

@section('content')
    <div class="bg-white">
        {{-- Header --}}
        <div class="flex justify-center mx-auto border-b">
            <div class="block max-w-7xl text-center p-8 my-10">
                <h3 class="font-semibold leading-tight text-3xl my-auto mb-3">Produk Eksklusif</h3>
                <p class="font-normal leading-tight text-base text-gray-600 opacity-80 my-auto">Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Laborum, accusamus, vel quas earum quo facere hic sunt adipisci quisquam
                    excepturi minus quasi inventore sint ipsum harum delectus rerum eos repudiandae!</p>
            </div>
        </div>
        {{-- End Header --}}
        {{-- Sidebar Category --}}
        <div class="flex justify-center mx-auto px-10">
            <div class="hidden md:block max-w-md min-w-fit mt-10 shadow-lg border p-5 rounded-md">
                <h5 class="font-bold leading-tight text-base my-auto p-3">Categories</h5>
                <div class="px-4 mt-2 space-y-2">
                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="categories1" checked>
                        <label class="form-check-label text-sm inline-block text-gray-7 00" for="categories1">
                            Produk Eksklusif
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="categories2">
                        <label class="form-check-label text-sm inline-block text-gray-700" for="categories2">
                            Makanan
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="categories3">
                        <label class="form-check-label text-sm inline-block text-gray-700" for="categories3">
                            Otomotif
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="categories4">
                        <label class="form-check-label text-sm inline-block text-gray-700" for="categories4">
                            Jasa
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="categories5">
                        <label class="form-check-label text-sm inline-block text-gray-700" for="categories5">
                            Pakaian
                        </label>
                    </div>
                </div>
            </div>
            {{-- End Sidebar Category --}}
            {{-- Item Content --}}
            <div class="block max-w-fit mt-2.5 shadow-lg p-8">
                <div class="grid grid-flow-row xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    @include('dummy.dummy-category')
                </div>
            </div>
            {{-- End Item Content --}}
        </div>
    </div>
@endsection
