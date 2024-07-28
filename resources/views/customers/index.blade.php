@extends('layouts.app')

@section('title', 'Daftar Customer')

@section('content')
    <h1 style="text-align: center">Daftar Customer</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Tambah Customer</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->nama_customer }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>
                    <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
