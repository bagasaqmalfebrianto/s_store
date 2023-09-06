<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('home',[
        'title'=>'Home'
    ]);
});

Route::get('/home', function () {
    return  view('home',[
        'title'=>'Home']);
});

Route::get('/belanja', [BarangController::class,'index']);

Route::get('/tentang_kami', function () {
    return  view('tentang_kami',[
        'title'=>'Tentang Kami']);
});

Route::get('/belanjas/{barang:slug}', [BarangController::class,'show']);

Route::get('/berita', function () {
    return  view('menu_berita',[
        'title'=>'Berita'
    ]);
});



// LOGIN
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

//Register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::Post('/register',[RegisterController::class,'store']);



//Dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/barang', DashboardController::class)->middleware('auth');



