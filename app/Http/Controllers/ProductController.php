<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $product = Product::all();
        return view('product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = Jenis::all();
        return view('product.create', ['jenis' => $jenis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'status' => 'required'
        ]);

        $product = new Product;

        $product->product = $request['product'];
        $product->jenis_id = $request['jenis'];
        $product->harga = $request['harga'];
        $product->stok = $request['stok'];
        $product->status = $request['status'];

        $product->save();

        return redirect('/product')->with('status', 'Data Berhasil Ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $product = Product::find($id);

        return view('product.detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $jenis = Jenis::all();
        return view('product.edit', ['jenis' => $jenis, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'status' => 'required'
        ]);

        $product = Product::find($id);

        $product->product = $request['product'];
        $product->jenis_id = $request['jenis'];
        $product->harga = $request['harga'];
        $product->stok = $request['stok'];
        $product->status = $request['status'];

        $product->save();

        return redirect('/product')->with('status', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/product')->with('status', 'Data Berhasil Dihapus');
    }
}
