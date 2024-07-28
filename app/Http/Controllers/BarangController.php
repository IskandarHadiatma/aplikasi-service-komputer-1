<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all(); // Mengambil semua data barang
        return view('barangs.index', compact('barangs')); // Mengirim data ke view
    }

    public function create()
    {
        return view('barangs.create'); // Menampilkan form untuk menambah barang
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:150',
            'merek' => 'required|string|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string|max:10',
        ]);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'merek' => $request->merek,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
        ]);

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan.');
    }
}
