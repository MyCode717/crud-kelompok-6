@extends('layouts.app')

@section('content')
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
    <style>
        /* Memberikan jarak/padding yang nyaman di dalam sel tabel */
        .table th, .table td {
            padding: 12px 15px !important;
            vertical-align: middle;
        }

        /* Merapikan tombol aksi di kolom terakhir */
        td form {
            display: inline-block;
            margin: 0;
        }

        /* Styling tombol aksi agar seragam dan berjarak */
        .table td a, 
        .table td button {
            display: inline-block;
            padding: 5px 10px;
            font-size: 13px;
            background-color: #51409F;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 5px;
            margin-bottom: 4px; /* Memberikan jarak jika tombol turun ke bawah */
        }

        .table td a:hover, 
        .table td button:hover {
            background-color: #3f317e;
            color: white;
        }

        /* Khusus tombol Hapus (warna merah agar kontras) */
        .table td button {
            background-color: #dc3545;
            cursor: pointer;
        }

        .table td button:hover {
            background-color: #bb2d3b;
        }
        
        a {
            padding: 5px;
            background-color: #51409F;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }

        
/* Container Pagination */
.arrow-b {
    margin-top: 15px;
    padding: 15px;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    color: #333;
}

/* Mengatur posisi pagination */
.arrow-b nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
}

/* Menghilangkan bullet points */
.arrow-b ul {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 5px;
    margin: 0;
    padding: 0;
}

/* Desain tombol pagination */
.arrow-b nav a,
.arrow-b nav span[aria-current="page"],
.arrow-b nav span[aria-disabled="true"] {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    min-width: 36px;
    height: 36px;
    padding: 0 12px;
    border: 1px solid #dee2e6;
    border-radius: 6px;
    background-color: white;
    color: #333;
    text-decoration: none;
    font-size: 14px;
}

/* Efek ketika tombol diarahkan kursor */
.arrow-b nav a:hover {
    background-color: #198754;
    color: white;
    border-color: #198754;
}

/* Halaman yang sedang aktif */
.arrow-b nav span[aria-current="page"] {
    background-color: #198754;
    color: white;
    border-color: #198754;
    font-weight: bold;
}

/* Tombol yang tidak aktif */
.arrow-b nav span[aria-disabled="true"] {
    color: #aaa;
    background-color: #f1f1f1;
    cursor: not-allowed;
}
.tambah-data {
    background-color: #198754;
    padding: 10px;
    width: 200px;
    margin: 10px;
}
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Daftar Pelanggan</h1>

    <p>
        <a href="{{ route('pelanggans.create') }}" class="tambah-data">
            <i class="fa-solid fa-plus"> </i>
        Tambah Data Pelanggan
        </a>
    </p>

    @session('success')
    <p style="color: green">
        {{ session('success') }}
    </p>
    @endsession

<table border="1" cellpadding="10" class="table table-bordered">
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
    @forelse ($pelanggans as $pelanggan)
        <tr>
            <td>{{ $pelanggan->id }}</td>
            <td>{{ $pelanggan->kode_pelanggan }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->kategori }}</td>
            <td>{{ $pelanggan->email }}</td>
            <td>{{ $pelanggan->tanggal_daftar->translatedFormat('d F Y') }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->keterangan }}</td>
            <td style="padding: 10px;">
                <a href="{{ route('pelanggans.show', $pelanggan->id) }}">Lihat Detail</a>
                <a href="{{ route('pelanggans.edit', $pelanggan->id) }}">Edit</a>
                <form action="{{ route('pelanggans.destroy', $pelanggan->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data pelanggan ini? ')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="9" style="text-align: center;">Belum ada data pelanggan nih</td>
        </tr>
    @endforelse
</tbody>
</table>   
</div>
<div class="arrow-b">
    {{ $pelanggans->links() }}
</div>
</body>
</html>
@endsection
