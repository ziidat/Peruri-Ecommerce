@extends('layouts.app')

@section('content')
<div class="flex justify-center mx-20 mt-10">
    @include('layouts.sidebar.user-menu')
    <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-6 py-2 border-b-2">Tambah Produk Baru</h5>
          <form>
            <div class="form-group mb-6">
              <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Nama Produk</label>
              <input type="email" class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Nama Produk">
            </div>
            <div class="form-group mb-6">
              <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Deskripsi</label>
              <input type="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                placeholder="Deskripsi Produk">
            </div>
            <div class="form-group mb-6">
              <label for="exampleInputPassword1" class="form-label inline-block mb-2 text-gray-700">Harga</label>
              <input type="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
                placeholder="Rp.">
            </div>
            <div class="form-group mb-6">
              <!-- Required form plugin -->
                <link
                href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
                rel="stylesheet"
                />

                <label class="block text-left" style="max-width: 300px">
                <span class="text-gray-700">Kategori</span>
                <select class="form-multiselect block w-full mt-1" multiple>
                  <option>Produk Eksklusif</option>
                  <option>Makanan</option>
                  <option>jasa</option>
                  <option>Elektronik</option>
                  <option>Otomotif</option>
                </select>
                </label>
            </div>
            <div class="form-group mb-6">
              <div class="mb-3 w-96">
                <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Gambar Produk</label>
                <input class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile">
              </div>
            </div>

            <button type="submit" class="
              px-6
              py-2.5
              bg-blue-600
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Simpan Produk</button>
          </form>
    </div>
</div>
@endsection