@extends('layout.main')

@section('container')
    <div class="h-auto">
        <div class="flex my-10">
            {{-- CART --}}
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-3">
                    <h1 class="font-semibold text-green_button text-xl">KERANJANG</h1>
                    <h2 class="font-semibold text-green_button text-xl">{{ $carts->count() }} Barang</h2>
                </div>
                {{-- <h2 class="text-green_button text-xl font-semibold mb-3">KERANJANG</h2> --}}

                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Barang</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Jumlah</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Harga</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>

                {{-- Barang 1 --}}
                @foreach ($carts as $cart)
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b">
                        <div class="flex w-2/5"> <!-- product -->
                            <div class="w-20">
                                <img class="h-24" src="https://source.unsplash.com/500x400?computer" alt="">
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm">{{ $cart->barang->nama }}</span>
                                <span class="text-red-500 text-xs">{{ $cart->barang->category->nama }}</span>
                                <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Hapus</a>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">
                            <a href="javascript:void(0)"
                                class="decrement bg-blue-500 text-white px-3 py-1 rounded-full focus:outline-none focus:ring focus:border-blue-300">-</a>

                            <input class="item-quantity mx-2 border text-center w-8" type="number"
                                value="{{ $cart->jumlah }}" min="1">

                            <a href="javascript:void(0)"
                                class="increment bg-blue-500 text-white px-3 py-1 rounded-full focus:outline-none focus:ring focus:border-blue-300">+</a>
                        </div>
                        <span class="price text-center w-1/5 font-semibold text-sm">Rp. {{ $cart->barang->harga }}</span>
                        <span class="subtotal text-center w-1/5 font-semibold text-sm">Rp.
                            {{ $cart->barang->harga * $cart->jumlah }}</span>
                    </div>
                @endforeach

            </div>

            <div class="w-1/4 px-8 py-10 border rounded h-1/2">
                <h1 class="font-semibold text-2xl border-b pb-8">Rincian Belanja</h1>
                <div class="flex justify-between mt-2">
                    <span class="font-normal text-sm">Total harga</span>
                    <span class="font-normal text-sm">{{ $carts->count() }}</span>
                    <span class="font-normal text-sm">Rp. {{ $cart->barang->harga }}</span>
                </div>
                <div class="mt-2">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span class="font-bold text-green_button">Total</span>
                        <span class="font-bold">Rp. {{ $cart->barang->harga }}</span>
                    </div>
                    <div class="flex justify-center">
                        <button class="bg-green_button text-white px-10 py-2 rounded-md">Bayar Sekarang</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const incrementButtons = document.querySelectorAll('.increment');
        const decrementButtons = document.querySelectorAll('.decrement');
        const quantityElements = document.querySelectorAll('.item-quantity');
        const hargaElements = document.querySelectorAll('.subtotal');
        const itemPrice = document.querySelectorAll('.price');

        incrementButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                // Mengambil nilai saat ini dari input
                let quantity = parseInt(quantityElements[index].value);

                // Menambahkan 1 ke nilai
                quantity++;

                // Memperbarui nilai di input
                quantityElements[index].value = quantity;
                updateHarga(index, quantity);
            });
        });

        decrementButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                // Mengambil nilai saat ini dari input
                let quantity = parseInt(quantityElements[index].value);

                // Memastikan nilai tidak kurang dari 1
                if (quantity > 1) {
                    // Mengurangkan 1 dari nilai
                    quantity--;

                    // Memperbarui nilai di input
                    quantityElements[index].value = quantity;

                    updateHarga(index, quantity);
                }
            });
        });

        function updateHarga(index, quantity) {
            const price = parseInt(itemPrice[index].textContent.replace('Rp. ', ''))
            console.log(price);
            const subtotal = price * quantity;
            hargaElements[index].textContent = `Rp. ${subtotal.toFixed(2)}`;
        }
    });
</script>
