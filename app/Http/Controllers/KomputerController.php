<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    public function index()
    {
        $komputers = Komputer::all();
        return view('komputers.index', compact('komputers'));
    }

    public function create()
    {
        return view('komputers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_komputer' => 'required|string|max:10|unique:komputers',
            'nama_komputer' => 'required|string|max:150',
            'merek' => 'required|string|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string|max:10',
        ]);

        Komputer::create($request->all());

        return redirect()->route('komputers.index')->with('success', 'Komputer berhasil ditambahkan.');
    }

    public function show($id)
    {
        $komputer = Komputer::findOrFail($id);
        return view('komputers.show', compact('komputer'));
    }

    public function edit($id)
    {
        $komputer = Komputer::findOrFail($id);
        return view('komputers.edit', compact('komputer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_komputer' => 'required|string|max:10|exists:komputers,id_komputer',
            'nama_komputer' => 'required|string|max:150',
            'merek' => 'required|string|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string|max:10',
        ]);

        $komputer = Komputer::findOrFail($id);
        $komputer->update($request->all());

        return redirect()->route('komputers.index')->with('success', 'Komputer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $komputer = Komputer::findOrFail($id);
        $komputer->delete();

        return redirect()->route('komputers.index')->with('success', 'Komputer berhasil dihapus.');
    }
}
