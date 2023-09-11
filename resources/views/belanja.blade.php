@extends('layout.main')

@section('container')
    {{-- @include("konten.iklan") --}}

    <div class="carousel w-full">

        {{-- Contoh Kode --}}
        {{-- @foreach ($iklans as $key => $iklan)
        @if ($loop->first)
        <div id="slide{{ $key }}" class="carousel-item relative w-full">
            <img src="{{ asset('images/'.$iklan->image) }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide{{ $iklan->count() }}" class="btn btn-circle">❮</a>
                <a href="#slide{{ $key + 1 }}" class="btn btn-circle">❯</a>
            </div>
        </div>
        @endif

        <div id="slide{{ $key }}" class="carousel-item relative w-full">
            <img src="{{ asset('images/promo-2.png') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide{{ $key - 1 }}" class="btn btn-circle">❮</a>
                <a href="#slide{{ $key + 1 }}" class="btn btn-circle">❯</a>
            </div>
        </div>

        @endforeach --}}
        {{-- End --}}


        <div id="slide1" class="carousel-item relative w-full">
            <img src="{{ asset('images/promo-1.jpeg') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img src="{{ asset('images/promo-2.png') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img src="{{ asset('images/promo-3.png') }}" class="w-full" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>

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
            @for ($i = 1; $i <= 4; $i++)
                <li>
                    <a href="">
                        <div class="bg-white w-250 h-600 rounded-xl items-center inline-block drop-shadow-md">
                            <div class="flex justify-center m-2 w-230 ">
                                <img src="images/bagas.png" alt="gambar" class="rounded-xl object-cover ">
                            </div>
                            <div class="text-justify p-2">
                                @include('komponen_kecil.star')
                                <h1 class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
                                    amet perferendis rem natus harum officia voluptas dignissimos ad odio quo!</h1>

                                <h4 class="font-bold text-lg">RP.250.000</h4>
                                <div class="flex justify-center w-full">
                                    <button class="bg-green_button rounded-full px-10 py-1 text-white">BELI
                                        SEKARANG</button>
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
        <ul id="data-wrapper" class="grid grid-cols-4 gap-4">

            @include('child')

        </ul>
    </div>

    <div class="auto-load flex justify-center mt-4" style="display: none;">
        <span class="loading loading-spinner text-primary"></span>
    </div>



    <div class="flex justify-center m-10" id="button-wrapper">
        <div class="bg-green_button px-10 py-2 rounded-full text-white">
            <ul>
                <li>
                    <a href="javascript:void(0)" id="loadMoreButton">Selengkapnya</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var page = 1;
        $("#loadMoreButton").click(function() {
            page++;
            loadMoreData(page);
        });
    });

    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.auto-load').show();
                    $('#button-wrapper').hide();
                }
            })
            .done(function(data) {
                if (data.html == " ") {
                    $('.auto-load').html("No records!");
                    return;
                }
                $('.auto-load').hide();
                $('#button-wrapper').show();
                $("#data-wrapper").append(data.html);
            })
    }
</script>
