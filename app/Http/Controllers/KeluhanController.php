<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhans = Keluhan::all();
        return view('keluhans.index', compact('keluhans'));
    }

    public function create()
    {
        return view('keluhans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required|integer',
            'id_komputer' => 'required|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        Keluhan::create($request->all());

        return redirect()->route('keluhans.index')
                        ->with('success', 'Keluhan created successfully.');
    }

    public function show(Keluhan $keluhan)
    {
        return view('keluhans.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        return view('keluhans.edit', compact('keluhan'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required|integer',
            'id_komputer' => 'required|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        $keluhan->update($request->all());

        return redirect()->route('keluhans.index')
                        ->with('success', 'Keluhan updated successfully');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluhans.index')
                        ->with('success', 'Keluhan deleted successfully');
    }
}
