<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    // Menampilkan form untuk membuat pegawai baru
    public function create()
    {
        return view('pegawai.create'); // Pastikan view ini ada di folder resources/views/pegawai
    }

    // Menyimpan pegawai baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|in:teknisi,admin,spv',
            'status' => 'required|in:aktif,tidak aktif',
        ]);

        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan daftar pegawai
    public function index()
    {
        $pegawais = Pegawai::all(); // Mengambil semua data pegawai
        return view('pegawai.index', compact('pegawais')); // Mengirim data ke view
    }
}
