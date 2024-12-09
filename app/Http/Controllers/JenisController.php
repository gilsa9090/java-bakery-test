<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', ['jenis' => $jenis]);
    }

    public function create()
    {
        return view('jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'jenis' => 'required|min:2',
            'status' => 'required',
        ]);

        $jenis = new Jenis;
        $jenis->jenis = $request['jenis'];
        $jenis->status = $request['status'];

        $jenis->save();

        return redirect('/jenis')->with('status', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.detail', ['jenis' => $jenis]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.edit', ['jenis' => $jenis]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis' => 'required|min:2',
            'status' => 'required',
        ]);

        $jenis = Jenis::find($id);

        $jenis->jenis = $request['jenis'];
        $jenis->status = $request['status'];
        $jenis->save();

        return  redirect('/jenis')->with('status', 'Data Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jenis = Jenis::find($id);

        $jenis->delete();

        return redirect('/jenis')->with('status', 'Data Telah Dihapus');
    }
}
