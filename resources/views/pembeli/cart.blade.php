@extends('layout.main')

@section('container')
    <div class="h-auto">
        <div class="flex my-10">
            {{-- CART --}}
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-3">
                    <h1 class="font-semibold text-green_button text-xl">KERANJANG</h1>
                    <h2 class="font-semibold text-green_button text-xl">3 Barang</h2>
                </div>
                {{-- <h2 class="text-green_button text-xl font-semibold mb-3">KERANJANG</h2> --}}

                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Barang</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Jumlah</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Harga</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>

                {{-- Barang 1 --}}
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b">
                    <div class="flex w-2/5"> <!-- product -->
                        <div class="w-20">
                            <img class="h-24" src="https://source.unsplash.com/500x400?computer" alt="">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Beras</span>
                            <span class="text-red-500 text-xs">Kategori</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Hapus</a>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>

                        <input class="mx-2 border text-center w-8" type="text" value="1">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp. 100.000</span>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp. 100.000</span>
                </div>

                {{-- Barang 2 --}}
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b">
                    <div class="flex w-2/5"> <!-- product -->
                        <div class="w-20">
                            <img class="h-24" src="https://source.unsplash.com/500x400?computer" alt="">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">Beras</span>
                            <span class="text-red-500 text-xs">Kategori</span>
                            <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Hapus</a>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>

                        <input class="mx-2 border text-center w-8" type="text" value="1">

                        <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                        </svg>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp. 100.000</span>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp. 100.000</span>
                </div>
            </div>

            <div class="w-1/4 px-8 py-10 border rounded h-1/2">
                <h1 class="font-semibold text-2xl border-b pb-8">Rincian Belanja</h1>
                <div class="flex justify-between mt-2">
                    <span class="font-normal text-sm">Total harga</span>
                    <span class="font-normal text-sm">2</span>
                    <span class="font-normal text-sm">Rp. 200.000</span>
                </div>
                <div class="mt-2">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span class="font-bold text-green_button">Total</span>
                        <span class="font-bold">Rp. 200.000</span>
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-green_button text-white px-10 py-2 rounded-md">Bayar Sekarang</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
