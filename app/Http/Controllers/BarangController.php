<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Barang;
use App\Models\Iklan;
use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $barang1;

    public function index(Request $request)
    {
        $barang = Barang::inRandomOrder()->paginate(8);
        if ($request->ajax()) {
            $view = view('child', ['nama_barang' => $barang])->render();

            return response()->json(['html' => $view]);
        }
        return view('belanja', [
            'title' => 'belanja',
            'nama_barang' => $barang,
            'iklans' => Iklan::all()
        ]);
    }

    public function show(Barang $barang)
    {
        $this->barang1 = $barang;
        return view('belanjas', [
            'title' => 'belanjas',
            'barang' => $this->barang1,
        ]);
    }

    public function store(Request $request, Barang $barang)
    {
        if (!Auth::user()) {
            abort(403);
        }
        $cart = Cart::create([
            'user_id' => auth()->user()->id,
            'barang_id' => $barang->id,
            'jumlah' => $request->jumlah,
        ]);

        $cart->barang()->decrement('stok', $request->jumlah);

        return redirect('/cart')->with('success', 'Barang Berhasil Ditambahkan!');
    }



}