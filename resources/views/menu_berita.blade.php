@extends('layout.main')

@section('container')

<div>
    <h1 class="text-green_button text-24 text-bold">BERITA TERBARU</h1>

    <hr class="border-t border-black">


    <div class="my-3"></div>
    @include('konten.berita')
</div>





@endsection
