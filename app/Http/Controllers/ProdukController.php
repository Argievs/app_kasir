<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home.produk.index', compact('produk'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('home.produk.tambah', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "gambar" => 'required|image',           
            "nama" => 'required|min:3',                    
            "harga" => 'required|numeric',           
            "stok" => 'required|numeric'
        ]);

        $image = $request->file('gambar');
        $image->storeAs('products', $image->hashName(), 'public');

        Produk::create([
            "gambar" => $image->hashName(),           
            "nama" => $request->nama,                
            "harga" => $request->harga,           
            "stok" => $request->stok           
        ]);
        return redirect('/produk')->with('succes', 'Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('home.produk.edit',[
            'produk' => Produk::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "gambar" => 'required|image|mimes:jpeg,jpg,png|max:2048',           
            "nama" => 'required|min:3',               
            "harga" => 'required|numeric',           
            "stok" => 'required|numeric'
        ]);

        $produk = Produk::find($id);

        if ($request->hasFile('gambar')){

            $image = $request->file('gambar');
            $image->storeAs('public/products', $image->hashName());

            Storage::delete('public/products/' . $produk->gambar);

        }

        $produk->update([
            "gambar" => $image->hashName(),           
            "nama" => $request->nama,                    
            "harga" => $request->harga,           
            "stok" => $request->stok
        ]);
        return redirect('/produk')->with('succes', 'Data Berhasil Diedit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk=Produk::find($id);
        $produk->delete();

        return redirect('/produk')->with('succes', 'Data Berhasil Dihapus');
    }
}
