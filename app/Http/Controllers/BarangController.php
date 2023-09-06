<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('belanja',[
            'title'=>'belanja',
            "nama_barang" => Barang::get()
        ]);
    }

    public function show(Barang $barang){
        return view('belanjas',[
            'title'=>'belanjas',
            'barang'=>$barang
        ]);
    }

}
