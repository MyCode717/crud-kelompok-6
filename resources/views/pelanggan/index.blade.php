<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Pelanggan</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1 class="text-center">Daftar Pelanggan</h1>

    <p>
        <a href="{{ route('pelanggans.create') }}">
            Tambah Produk
        </a>
    </p>

    @session('success')
    <p style="color: green">
        {{ session('success') }}
    </p>
    @endsession

<table border="1" cellpadding="10" class="table table-bordered my-4 mx-auto w-75">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Pelanggan</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach (  $pelanggans as $pelanggan )
        <tr>
            <td>{{ $pelanggan->id }}</td>
            <td>{{ $pelanggan->kode_pelanggan }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->kategori }}</td>
            <td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->tanggal_daftar->translatedFormat('d F Y') }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->keterangan }}</td>
            <td>
                <a href="{{ route('pelanggans.edit', $pelanggan->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>   
</div>
<div>
    {{ $pelanggans->links() }}
</div>
</body>
</html>