@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pegawai</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawais as $pegawai)
                <tr>
                    <td>{{ $pegawai->id }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->jenis_kelamin }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->status }}</td>
                    <td>
                        <!-- Action buttons, if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
