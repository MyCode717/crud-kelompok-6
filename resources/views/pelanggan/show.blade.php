
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Detail Pelanggan</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $pelanggan->id }}</td>
        </tr>
        <tr>
            <th>Kode Pelanggan</th>
            <td>{{ $pelanggan->kode_pelanggan }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $pelanggan->nama }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $pelanggan->kategori }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $pelanggan->email }}</td>
        </tr>
        <tr>
            <th>Tanggal Daftar</th>
            <td>{{ $pelanggan->tanggal_daftar->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $pelanggan->alamat }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $pelanggan->keterangan ?? '-' }}</td>
        </tr>
    </table>

    <a href="{{ route('pelanggans.index') }}" class="btn btn-secondary">
        Kembali
    </a>

    <a href="{{ route('pelanggans.edit', $pelanggan->id) }}" class="btn btn-primary">
        Edit Pelanggan
    </a>
</div>

</body>
</html>
