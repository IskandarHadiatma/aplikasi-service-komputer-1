<!DOCTYPE html>
<html>
<head>
    <title>Show Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Detail Barang</h1>
    <p><strong>ID:</strong> {{ $barang->id_barang }}</p>
    <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
    <p><strong>Merek:</strong> {{ $barang->merek }}</p>
    <p><strong>Harga:</strong> {{ $barang->harga }}</p>
    <p><strong>Stok:</strong> {{ $barang->stok }}</p>
    <p><strong>Satuan:</strong> {{ $barang->satuan }}</p>
    <a href="{{ route('barangs.index') }}" class="btn btn-primary">Back to List</a>
</div>
</body>
</html>
