@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pegawai Baru</h1>
    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai:</label>
            <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <select id="jabatan" name="jabatan" class="form-control" required>
                <option value="teknisi">Teknisi</option>
                <option value="admin">Admin</option>
                <option value="spv">Supervisor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control" required>
                <option value="aktif">Aktif</option>
                <option value="tidak aktif">Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
