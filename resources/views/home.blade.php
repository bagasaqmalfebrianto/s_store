@extends('layout.main')

@section('container')


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

                                        <h1 class="text-sm p-2">{{Str::limit($nb->body, 130)}}</h1>

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

            <!--SELENGKAPNYA -->
            <div class="flex justify-center m-10">
                <div >
                    <input type="hidden" id="offset" value="0">
                    <input type="hidden" id="limit" value="3">

                    <!-- Tombol Selengkapnya -->
                    <button class="bg-green_button px-10 py-2 rounded-full text-white" id="show-more">Selengkapnya</button>

                </div>
            </div>

            <hr class="border-t border-black">

            <h1 class="my-5 font-bold text-lg text-green_button" >BERITA TERKAIT</h1>

            @include('konten.berita')

            <div class="flex justify-center m-10">
                <div class="bg-green_button px-10 py-2 rounded-full text-white">

                        <button id="show-more">Selengkapnya</button>

                </div>
            </div>






@endsection





