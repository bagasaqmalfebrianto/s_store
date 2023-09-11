<div class="bg-green2/100">

    <div class="flex justify-center gap-5 p-2">
        <div class="inline-block mx-2">
            <div class="flex">
                <img src="images/logo_sembako.png" alt="logo-sembako" class="w-150">

                <div class=" m-auto">
                        <h1 class="font-bold text-25 text-green_button">SEMBAKO</h1>
                        <h1 class="font-bold text-25 text-green_button">STORE</h1>
                </div>
            </div>
        </div>

        <!-- MENUUUUU -->
        <div class="mx-2 mt-4">
            <ul class=" inline-block" >
                <li class="mb-4">
                    <ul class="flex gap-10 justify-center">
                        <li>
                            <a href="/home" class="text-white-600 hover:text-green_button font-medium ">Menu</a>
                        </li>
                        <li>
                            <a href="/belanja" class="text-white-600 hover:text-green_button font-medium">Belanja Sekarang</a>
                        </li>
                        <li>
                            <a href="/tentang_kami" class="text-white-600 hover:text-green_button font-medium">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="/katalog" class="text-white-600 hover:text-green_button font-medium">Katalog</a>
                        </li>
                        <li>
                            <a href="/berita" class="text-white-600 hover:text-green_button font-medium">Berita</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="flex gap-10 justify-center">
                        <li>
                            <a href="#">CARI</a>
                        </li>
                        <li>
                            <input type="text" class="w-800">
                        </li>
                        <li>
                            <p>k</p>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>


        <div class="my-auto">
            <ul class="flex gap-4">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hello, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </ul>
                  </li>
                    @else
                    <li class="/login">
                        <a href="/login" class="hover:text-green_button font-medium"><i class="bi bi-arrow-right-square "></i>  LOGIN</a>
                    </li>
                    <li>
                        <a href="/register" class="hover:text-green_button font-medium">DAFTAR</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

</div>
