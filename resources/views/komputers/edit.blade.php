@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Komputer</h1>
    <form action="{{ route('komputers.update', $komputer->id_komputer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_komputer">ID Komputer</label>
            <input type="text" class="form-control" id="id_komputer" name="id_komputer" value="{{ $komputer->id_komputer }}" readonly>
        </div>
        <div class="form-group">
            <label for="nama_komputer">Nama Komputer</label>
            <input type="text" class="form-control" id="nama_komputer" name="nama_komputer" value="{{ $komputer->nama_komputer }}" required>
        </div>
        <div class="form-group">
            <label for="merek">Merek</label>
            <input type="text" class="form-control" id="merek" name="merek" value="{{ $komputer->merek }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $komputer->harga }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $komputer->stok }}" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $komputer->satuan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
