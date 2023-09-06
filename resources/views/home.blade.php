@extends('layout.main')

@section('container')



        {{-- @include("konten.iklan") --}}

    <!-- ISI -->



                <ul class="flex justify-between">
                    <li>
                        <a href="#" class="font-bold text-lg text-green_button">PRODUK</a>
                    </li>
                    <li>
                        <a href="#" class="font-bold text-lg text-green_button">SELENGKAPNYA</a>

                    </li>
                </ul>
            <hr class="border-t border-black">



            <div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)] mt-3 flex justify-center items-center">
                <ul class="grid grid-cols-4 gap-4">
                     {{-- @foreach ($nama_barang as $nb )


                        <li>
                            <a href="">
                                <div class="bg-white w-250 h-600 rounded-xl items-center inline-block drop-shadow-md">
                                    <div class="flex justify-center m-2 w-230 ">
                                        <img src="images/bagas.png" alt="gambar" class="rounded-xl object-cover ">
                                    </div>
                                    <div class="text-justify p-2">
                                        @include("komponen_kecil.star")
                                        <h1 class="text-sm">{{Str::limit($nb->body, 100)}}</h1>

                                        <h4 class="font-bold text-lg">Rp. {{ $nb->harga }}</h4>
                                        <div class="flex justify-center w-full">
                                            <button class="bg-green_button rounded-full px-10 py-1 text-white">BELI SEKARANG</button>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </li>
                    @endforeach --}}

                </ul>
            </div>


            <!--SELENGKAPNYA -->
            <div class="flex justify-center m-10">
                <div class="bg-green_button px-10 py-2 rounded-full text-white">
                    <ul>
                        <li>
                            <a href="#">Selengkapnya</a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-t border-black">

            <h1 class="my-5 font-bold text-lg text-green_button" >BERITA TERKAIT</h1>

            @include('konten.berita')

            <div class="flex justify-center m-10">
                <div class="bg-green_button px-10 py-2 rounded-full text-white">
                    <ul>
                        <li>
                            <a href="#">Selengkapnya</a>
                        </li>
                    </ul>
                </div>
            </div>

@endsection


