@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Supplier</h1>
    <table class="table">
        <tr>
            <th>ID Supplier</th>
            <td>{{ $supplier->id_supplier }}</td>
        </tr>
        <tr>
            <th>Nama Supplier</th>
            <td>{{ $supplier->nama_supplier }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $supplier->alamat }}</td>
        </tr>
        <tr>
            <th>No HP</th>
            <td>{{ $supplier->no_hp }}</td>
        </tr>
        <tr>
            <th>Barang</th>
            <td>{{ $supplier->barang ? $supplier->barang->nama_barang : 'Tidak ada' }}</td>
        </tr>
    </table>
    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
