<?php

namespace App\Http\Controllers;

use App\Models\barangModel;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barangModel::all();
        $jumlahBarang = $barang->count();
        return view('beranda', compact('barang', 'jumlahBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TambahBarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:500',
        ]);

        barangModel::create($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = barangModel::findOrFail($id);
        return view('DetailBarang', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
