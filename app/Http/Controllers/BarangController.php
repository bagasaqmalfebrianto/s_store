<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

use function Termwind\render;
use Illuminate\Support\Facades\Response;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index(Request $request)
    {
        $barang = Barang::inRandomOrder()->paginate(8);
        if ($request->ajax()) {
            $view = view('child', ['nama_barang' => $barang])->render();

            return response()->json(['html' => $view]);
        }
        return view('belanja', [
            'title' => 'belanja',
            'nama_barang' => $barang
        ]);
    }

    public function show(Barang $barang)
    {
        return view('belanjas', [
            'title' => 'belanjas',
            'barang' => $barang
        ]);
    }



}