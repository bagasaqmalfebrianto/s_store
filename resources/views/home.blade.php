@extends('layout.main')

@section('container')



        @include("konten.iklan")

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



            @include("konten.card")

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


