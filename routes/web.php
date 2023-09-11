<?php

use App\Models\Barang;
use App\Models\Iklan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IklanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('home', [
        'title' => 'Home',

    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'nama_barang' => Barang::all(),
        'iklan' => Iklan::all()
    ]);
});

Route::get('/belanja', [BarangController::class, 'index'])->name('belanja.fetch');

Route::get('/tentang_kami', function () {
    return view('tentang_kami', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/belanjas/{barang:slug}', [BarangController::class, 'show']);
Route::post('/belanjas/{barang:slug}', [BarangController::class, 'store']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/berita', function () {
    return view('menu_berita', [
        'title' => 'Berita'
    ]);
});



// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::Post('/register', [RegisterController::class, 'store']);

//Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');



//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/barang', DashboardController::class)->middleware('auth');

//iklan

Route::resource('/dashboard/iklan', IklanController::class)->middleware('auth');

//Cart
Route::resource('/pembeli/cart', CartController::class)->middleware('auth');

//Berita
Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');