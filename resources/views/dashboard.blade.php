<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden md:px-8">
            <div class="mb-6 border-2 shadow-sm">
                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 bottom-0 left-0 mb-2 flex justify-center p-0">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active relative float-left w-full">
                            <a href="{{ 'dashboard' }}"
                                class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                                <img src="{{ asset('/images/1.jpg') }}" class="block w-full" alt="..." />
                                <div class="carousel-caption absolute hidden text-center md:block">
                                    <h5 class="text-xl">First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <a href="https://filateli.co.id/"
                                class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                                <img src="{{ asset('/images/2.jpg') }}" class="block w-full" alt="..." />
                                <div class="carousel-caption absolute hidden text-center md:block">
                                    <h5 class="text-xl">Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <a href="https://e-meterai.co.id/"
                                class="my-auto text-gray-500 transition ease-in-out hover:text-slate-800">
                                <img src="{{ asset('/images/3.jpg') }}" class="block w-full" alt="..." />
                                <div class="carousel-caption absolute hidden text-center md:block">
                                    <h5 class="text-xl">Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev absolute top-0 bottom-0 left-0 flex items-center justify-center border-0 p-0 text-center hover:no-underline hover:outline-none focus:no-underline focus:outline-none"
                        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next absolute top-0 bottom-0 right-0 flex items-center justify-center border-0 p-0 text-center hover:no-underline hover:outline-none focus:no-underline focus:outline-none"
                        type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            {{-- Category --}}
            <div class="mb-2 flex justify-start">
                <div class="min-w-full bg-white p-6 shadow">
                    <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Kategori</h5>
                    <div class="hide-scroll-bar flex overflow-x-scroll p-4">
                        <div class="flex">
                            @include('dummy.dummy-kategori')
                        </div>
                    </div>
                </div>
            </div>
            {{-- Featuring 1 --}}
            <div class="mb-2 flex justify-start">
                <div class="min-w-full rounded-lg bg-white px-6 py-2 shadow">
                    <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Produk Terbaru</h5>
                    <div class="hide-scroll-bar flex overflow-x-scroll p-2">
                        <div class="flex flex-nowrap space-x-3">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
            {{-- Featuring 2 --}}
            <div class="mb-2 flex justify-start">
                <div class="min-w-full rounded-lg bg-white px-6 py-2">
                    <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Paling Sering Di
                        lihat
                    </h5>
                    <div class="hide-scroll-bar flex overflow-x-scroll p-2">
                        <div class="flex flex-nowrap space-x-3">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Three Feature --}}
            {{-- Item Showcase --}}
            <div class="mb-2 flex justify-start">
                <div class="min-w-full rounded-lg bg-white px-6 py-2">
                    <h5 class="mb-2 border-b-2 pb-2 text-xl font-bold leading-tight text-gray-900">Produk Lainnya
                    </h5>
                    <div class="hide-scroll-bar flex overflow-x-scroll pt-2">
                        <div class="grid grid-flow-row grid-cols-2 gap-2 md:grid-cols-4 lg:grid-cols-6">
                            @include('dummy.dummy-item')
                        </div>
                    </div>
                </div>
            </div>
            {{-- End item Showcase --}}
        </div>
    </div>
</x-app-layout>
