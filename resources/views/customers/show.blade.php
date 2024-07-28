<!DOCTYPE html>
<html>
<head>
    <title>Show Customer</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4" style="text-align: center">Customer Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $customer->id }}</td>
            </tr>
            <tr>
                <th>Nama Customer</th>
                <td>{{ $customer->nama_customer }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $customer->alamat }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
            </tr>
        </table>
        <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</body>
</html>
