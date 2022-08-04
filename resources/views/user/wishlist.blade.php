<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Whislist') }}
        </h2>
    </x-slot>
    <div class="flex justify-center mx-20 mt-10">
        @include('layouts.sidebar.user-menu')
        <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-6 py-2 border-b-2">Wishlist Saya</h5>
                @include('dummy.dummy-item')
        </div>
    </div>
</x-app-layout>
