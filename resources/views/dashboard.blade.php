<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-1 md:px-10 lg:px-16 py-10 space-y-10">
                    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                          ></button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"
                          ></button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                          ></button>
                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden">
                          <div class="carousel-item active relative float-left w-full">
                            <a href="{{ 'dashboard' }}" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                            <img
                              src="{{ asset('/images/1.jpg') }}"
                              class="block w-full"
                              alt="..."
                            />
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item relative float-left w-full">
                            <a href="https://filateli.co.id/" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                            <img
                              src="{{ asset('/images/2.jpg') }}"
                              class="block w-full"
                              alt="..."
                            />
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item relative float-left w-full">
                            <a href="https://e-meterai.co.id/" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                            <img
                              src="{{ asset('/images/3.jpg') }}"
                              class="block w-full"
                              alt="..."
                            />
                            <div class="carousel-caption hidden md:block absolute text-center">
                              <h5 class="text-xl">Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button
                          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide="prev"
                        >
                          <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide="next"
                        >
                          <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                {{-- Category --}}
        <div class="flex justify-start">
            <div class="block p-6 rounded-lg shadow-lg bg-white min-w-full">
                <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2 border-b-2">Kategori</h5>
                <div class="flex overflow-x-scroll hide-scroll-bar p-4">
                    <div class="flex flex-nowrap">
                        @include('dummy.dummy-kategori')
                    </div>
                </div>
            </div>
        </div>
          {{-- Featuring 1 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-white min-w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2 border-b-2">Produk Terbaru</h5>
                    <div class="flex overflow-x-scroll hide-scroll-bar p-4">
                        <div class="flex flex-nowrap">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
          {{-- Featuring 2 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-white min-w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2 border-b-2">Paling Sering Di lihat</h5>
                    <div class="flex overflow-x-scroll hide-scroll-bar p-4">
                        <div class="flex flex-nowrap">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
        {{-- End Three Feature --}}
        {{-- Item Showcase --}}

        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 pb-2">Penawaran Lainnya</h5>
        @include('dummy.dummy-item')
        {{-- End item Showcase --}}
            </div>
        </div>
    </div>
</x-app-layout>
