<div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)] mt-3 flex justify-center items-center">
    <ul class="grid grid-cols-4 gap-4">
        @for ($i=1; $i<=12; $i++)
            <li>
                <a href="">
                    <div class="bg-white w-250 h-600 rounded-xl items-center inline-block drop-shadow-md">
                        <div class="flex justify-center m-2 w-230 ">
                            <img src="images/bagas.png" alt="gambar" class="rounded-xl object-cover ">
                        </div>
                        <div class="text-justify p-2">
                            @include("komponen_kecil.star")
                            <h1 class="text-sm">Beras Kepala / Beras Super
                                25 KG - Beras Putih / Pulen</h1>

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
</div>
