<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.barang.index',[
            'barangku'=>Barang::where('user_id',auth()->user()->id)->get()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('dashboard.barang.create',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request ->validate([
            'nama'=>'required|max:255',
            'slug'=>'required|unique:barangs',
            'harga'=>'required',
            'category_id'=>'required',
            'body'=>'required'
        ]);

        $validatedData['user_id']=auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);


        Barang::create($validatedData);

        return redirect('/dashboard/barang')->with('success','New post has been added');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {


        return view('dashboard.barang.edit',[
            'barang'=>$barang,
            'categories'=>Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
        $rules = [
            'nama'=>'required|max:255',
            'harga'=>'required',
            'category_id'=>'required',
            'body'=>'required'
        ];

        if($request->slug != $barang->slug){
            $rules['slug']='required|unique:barangs';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id']=auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Barang::where('id', $barang->id)
                    ->update($validatedData);

        return redirect('/dashboard/barang')->with('success','New post has been updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
        

        Barang::destroy($barang->id);

        return redirect('/dashboard/barang')->with('success','New post has been deleted');
    }

}
