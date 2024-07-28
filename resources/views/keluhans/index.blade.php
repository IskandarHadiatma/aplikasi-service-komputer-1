<!-- resources/views/keluhans/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Keluhan</h1>
    <a class="btn btn-success" href="{{ route('keluhans.create') }}">Create New Keluhan</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama Keluhan</th>
            <th>Ongkos</th>
            <th>ID Komputer</th>
            <th>Customer ID</th>
            <th>ID Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($keluhans as $keluhan)
        <tr>
            <td>{{ $keluhan->id_keluhan }}</td>
            <td>{{ $keluhan->nama_keluhan }}</td>
            <td>{{ $keluhan->ongkos }}</td>
            <td>{{ $keluhan->id_komputer }}</td>
            <td>{{ $keluhan->customer_id }}</td>
            <td>{{ $keluhan->id_pegawai }}</td>
            <td>
                <form action="{{ route('keluhans.destroy', $keluhan->id_keluhan) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('keluhans.show', $keluhan->id_keluhan) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('keluhans.edit', $keluhan->id_keluhan) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
