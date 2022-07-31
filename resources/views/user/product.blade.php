@extends('layouts.app')

@section('content')
<div class="flex justify-center mx-20 mt-10">
    @include('layouts.sidebar.user-menu')
    <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-6 py-2 border-b-2">Produk Saya</h5>
            @include('dummy.dummy-item')
    </div>
</div>
@endsection
