@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Barangs</h1>
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-3">Create Barang</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->merek }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>
                        <a href="{{ route('barangs.edit', $barang->id_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->id_barang) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
