@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Komputer</h1>
    <a href="{{ route('komputers.create') }}" class="btn btn-primary mb-3">Tambah Komputer</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Komputer</th>
                <th>Nama Komputer</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($komputers as $komputer)
            <tr>
                <td>{{ $komputer->id_komputer }}</td>
                <td>{{ $komputer->nama_komputer }}</td>
                <td>{{ $komputer->merek }}</td>
                <td>{{ $komputer->harga }}</td>
                <td>{{ $komputer->stok }}</td>
                <td>{{ $komputer->satuan }}</td>
                <td>
                    <a href="{{ route('komputers.show', $komputer->id_komputer) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('komputers.edit', $komputer->id_komputer) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('komputers.destroy', $komputer->id_komputer) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada komputer tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
