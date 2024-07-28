@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Komputer</h1>
    <form action="{{ route('komputers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_komputer">ID Komputer</label>
            <input type="text" class="form-control" id="id_komputer" name="id_komputer" required>
        </div>
        <div class="form-group">
            <label for="nama_komputer">Nama Komputer</label>
            <input type="text" class="form-control" id="nama_komputer" name="nama_komputer" required>
        </div>
        <div class="form-group">
            <label for="merek">Merek</label>
            <input type="text" class="form-control" id="merek" name="merek" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
