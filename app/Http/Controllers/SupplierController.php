<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Barang; // Pastikan model Barang sudah ada
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        $barangs = Barang::all(); // Ambil semua data barang untuk dropdown
        return view('suppliers.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_supplier' => 'required|integer|unique:suppliers',
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required|integer|exists:barangs,id_barang',
        ]);

        Supplier::create($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        $barangs = Barang::all(); // Ambil semua data barang untuk dropdown
        return view('suppliers.edit', compact('supplier', 'barangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_supplier' => 'required|integer|exists:suppliers,id_supplier',
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required|integer|exists:barangs,id_barang',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
