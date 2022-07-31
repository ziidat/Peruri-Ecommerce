@extends('layouts.app')

@section('content')
    <div class="flex justify-center mx-20 mt-10">
        @include('layouts.sidebar.user-menu')
        <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full space-y-2">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2">Diskusi Produk</h5>
            {{-- Session Diskusi Product 1 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-md bg-slate-100 w-full">
                    <div class="flex justify-start border-b-2 p-2">
                        <div class="basis-auto mx-auto mb-auto min-w-fit">
                            <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                alt="store_ava">
                        </div>
                        <div class="basis-full pl-4 pt-1">
                            <p class="text-gray-700 text-xs mb-2">
                                <span class="font-bold text-sm">User-A</span>
                                15-06-2022
                            </p>
                            <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam error veniam soluta nam
                                possimus quod. Laboriosam sequi cupiditate veniam eligendi ipsa molestiae odio quia velit?
                            </p>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, iusto itaque? Placeat
                                    modi harum aliquam!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Session Diskusi Product 1 --}}
            {{-- Session Diskusi Product 2 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-md bg-slate-100 w-full">
                    <div class="flex justify-start border-b-2 p-2">
                        <div class="basis-auto mx-auto mb-auto min-w-fit">
                            <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                alt="store_ava">
                        </div>
                        <div class="basis-full pl-4 pt-1">
                            <p class="text-gray-700 text-xs mb-2">
                                <span class="font-bold text-sm">User-A</span>
                                15-06-2022
                            </p>
                            <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam error veniam soluta nam
                                possimus quod. Laboriosam sequi cupiditate veniam eligendi ipsa molestiae odio quia velit?
                            </p>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, iusto itaque? Placeat
                                    modi harum aliquam!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Session Diskusi Product 2 --}}
        </div>
    </div>
@endsection
