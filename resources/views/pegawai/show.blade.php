<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center">Detail Pegawai</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID Pegawai</th>
                <td>{{ $pegawai->id_pegawai }}</td>
            </tr>
            <tr>
                <th>Nama Pegawai</th>
                <td>{{ $pegawai->nama_pegawai }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pegawai->alamat }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $pegawai->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ ucfirst($pegawai->jabatan) }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ ucfirst($pegawai->status) }}</td>
            </tr>
        </table>
        <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
