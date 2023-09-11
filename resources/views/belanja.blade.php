@extends('layout.main')

@section('container')

{{-- @include("konten.iklan") --}}


    <ul class="flex justify-between ">
        <li>
            <a href="#" class="font-bold text-lg text-green_button">Produk Trending</a>
        </li>
        <li>
            <a href="#" class="font-bold text-lg text-green_button">SELENGKAPNYA</a>

        </li>
    </ul>

<hr class="border-t border-black mb-4">


<div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)] mt-3 flex justify-center items-center">
    <ul class="grid grid-cols-4 gap-4">
        @for ($i=1; $i<=4; $i++)
            <li>
                <a href="">
                    <div class="bg-white w-250 h-600 rounded-xl items-center inline-block drop-shadow-md">
                        <div class="flex justify-center m-2 w-230 ">
                            <img src="images/bagas.png" alt="gambar" class="rounded-xl object-cover ">
                        </div>
                        <div class="text-justify p-2">
                            @include("komponen_kecil.star")
                            <h1 class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae amet perferendis rem natus harum officia voluptas dignissimos ad odio quo!</h1>

                            <h4 class="font-bold text-lg">RP.250.000</h4>
                            <div class="flex justify-center w-full">
                                <button class="bg-green_button rounded-full px-10 py-1 text-white">BELI SEKARANG</button>
                            </div>
                        </div>

                    </div>
                </a>
            </li>
        @endfor

    </ul>

    <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
</div>

{{-- @include("konten.iklan") --}}

<div class="my-4">
    <ul class=" ">
        <li>
            <a href="#" class="font-bold text-lg text-green_button">Rekomendasi</a>
        </li>
    </ul>

    <hr class="border-t border-black">
</div>


<div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)] mt-3 flex justify-center items-center">
    <ul class="grid grid-cols-4 gap-4">
         @foreach ($nama_barang as $nb )


            <li>
                <a href="/belanjas/{{ $nb->slug }}">
                    <div class="bg-white w-250 h-400 rounded-xl items-center inline-block drop-shadow-md">
                        @if($nb->image)
                        <div style="max-height: 200px; overflow:hidden">

                            <img src="{{ asset('storage/'. $nb->image) }}" alt="gambar" class="img-fluid rounded-xl">
                        </div>
                            @else
                            <img src="https://source.unsplash.com/500x400?{{ $nb->kategori }}" alt="gambar" class="rounded-xl max-height: 200px">
                        @endif

                        <div class="text-justify ">

                            <h1 class="font-bold text-lg px-2">{{ $nb->nama }}</h1>

                            <h1 class="text-sm p-2">{{Str::limit($nb->body, 150)}}</h1>

                            <h4 class="font-bold text-lg absolute bottom-10 p-2">Rp. {{ $nb->harga }}</h4>
                            <div class="flex justify-center w-full absolute bottom-3">
                                <button class="bg-green_button rounded-full px-10 py-1 text-white">BELI SEKARANG</button>
                            </div>
                        </div>

                    </div>
                </a>
            </li>
        @endforeach

    </ul>
</div>




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
