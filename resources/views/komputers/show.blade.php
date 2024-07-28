@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Komputer</h1>
    <table class="table">
        <tr>
            <th>ID Komputer</th>
            <td>{{ $komputer->id_komputer }}</td>
        </tr>
        <tr>
            <th>Nama Komputer</th>
            <td>{{ $komputer->nama_komputer }}</td>
        </tr>
        <tr>
            <th>Merek</th>
            <td>{{ $komputer->merek }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $komputer->harga }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $komputer->stok }}</td>
        </tr>
        <tr>
            <th>Satuan</th>
            <td>{{ $komputer->satuan }}</td>
        </tr>
    </table>
    <a href="{{ route('komputers.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
