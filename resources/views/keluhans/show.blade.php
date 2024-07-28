@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show Keluhan</h1>
    <div class="form-group">
        <strong>ID Keluhan:</strong>
        {{ $keluhan->id_keluhan }}
    </div>
    <div class="form-group">
        <strong>Nama Keluhan:</strong>
        {{ $keluhan->nama_keluhan }}
    </div>
    <div class="form-group">
        <strong>Ongkos:</strong>
        {{ $keluhan->ongkos }}
    </div>
    <div class="form-group">
        <strong>ID Komputer:</strong>
        {{ $keluhan->id_komputer }}
    </div>
    <div class="form-group">
        <strong>Customer ID:</strong>
        {{ $keluhan->customer_id }}
    </div>
    <div class="form-group">
        <strong>ID Pegawai:</strong>
        {{ $keluhan->id_pegawai }}
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('keluhans.index') }}">Back</a>
    </div>
</div>
@endsection
