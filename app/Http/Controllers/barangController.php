<?php

namespace App\Http\Controllers;

use App\Models\barangModel;
use Illuminate\Http\Request;
use App\Models\kategoriModel;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $barang = barangModel::with('kategori')
        ->when($request->kategori, function ($query) use ($request) {
            $query->where('kategori_id', $request->kategori);
        })
        ->when($request->search, function ($query) use ($request) {
            $query->where('nama_barang', 'like', '%' . $request->search . '%');
        })
        ->get();
        $kategori = kategoriModel::all();
        return view('beranda', compact('barang', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategoriModel::all();
        return view('TambahBarang', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
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
