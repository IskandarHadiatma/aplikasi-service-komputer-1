@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Keluhan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('keluhans.update', $keluhan->id_keluhan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <strong>Nama Keluhan:</strong>
            <input type="text" name="nama_keluhan" value="{{ $keluhan->nama_keluhan }}" class="form-control">
        </div>
        <div class="form-group">
            <strong>Ongkos:</strong>
            <input type="text" name="ongkos" value="{{ $keluhan->ongkos }}" class="form-control">
        </div>
        <div class="form-group">
            <strong>ID Komputer:</strong>
            <input type="text" name="id_komputer" value="{{ $keluhan->id_komputer }}" class="form-control">
        </div>
        <div class="form-group">
            <strong>Customer ID:</strong>
            <input type="text" name="customer_id" value="{{ $keluhan->customer_id }}" class="form-control">
        </div>
        <div class="form-group">
            <strong>ID Pegawai:</strong>
            <input type="text" name="id_pegawai" value="{{ $keluhan->id_pegawai }}" class="form-control">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
