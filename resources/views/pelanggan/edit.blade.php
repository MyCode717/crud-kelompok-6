@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
        <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    >
    <style>
               .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            border: 1px solid;
            width: 500px;
            padding: 5px;
            border-radius: 15px;
        }

        input {
            border: 1px solid;
            padding: 5px;
            border-radius: 5px;
        }

        select {
            border: 1px solid;
            padding: 5px;
            box-sizing: border-box;
            border-radius: 5px;
        }

        h1 {
            display: flex;
            justify-content: center;
        }

        td {
            padding: 10px;
        }

        .button-green {
            padding: 7px;
            background-color: #008000;
            border: 1px solid #008000;
            color: #fff;
            border-radius: 5px;
        }

        .button-red {
            padding: 7px;
            background-color: #c1121f;
            border: 1px solid #c1121f;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }

        textarea {
            border: 1px solid;
            border-radius: 5px;
        }

        .link-index {
            text-decoration: none;
            padding: 10px;
            border: 1px solid;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #023e8a;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="form">
    <h1>HALAMAN EDIT DATA PELANGGAN</h1>
<form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label>Kode Pelanggan</label></td>
            <td>:</td>
            <td>
                <input type="text" name="kode_pelanggan" value="{{ old('kode_pelanggan', $pelanggan->kode_pelanggan) }}">
            </td>
        </tr>
        <tr>
            <td><label>Nama</label></td>
            <td>:</td>
            <td>
                <input type="text" name="nama" value="{{ old('nama', $pelanggan->nama) }}">
            </td>
        </tr>
        <tr>
            <td><label>Kategori</label></td>
            <td>:</td>
            <td>
                <select name="kategori">
                    <option value="Reguler" {{ old('kategori', $pelanggan->kategori) == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                    <option value="Reguler" {{ old('kategori', $pelanggan->kategori) == 'Premium' ? 'selected' : '' }}>Premium</option>
                    <option value="VIP" {{ old('kategori', $pelanggan->kategori) == 'VIP' ? 'selected' : '' }}>VIP</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td>:</td>
            <td>
                <input type="email" name="email" value="{{ old('email', $pelanggan->email) }}">
            </td>
        </tr>
        <tr>
            <td><label>Tanggal Daftar</label></td>
            <td>:</td>
            <td>
                <input type="date" name="tanggal_daftar" value="{{ old('tanggal_daftar', $pelanggan->tanggal_daftar) }}">
            </td>
        </tr>
        <tr>
            <td><label>Alamat</label></td>
            <td>:</td>
            <td>
                <textarea name="alamat">{{ old('alamat', $pelanggan->alamat) }}</textarea>
            </td>
        </tr>
        <tr>
            <td><label>Keterangan</label></td>
            <td>:</td>
            <td>
                <textarea name="keterangan">{{ old('keterangan', $pelanggan->keterangan) }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">
            <CENTER><button type="submit" class="button-green">Simpan Perubahan</button>
                <a href="{{ route('pelanggans.index') }}" class="button-red">Batal</a></CENTER> 
            </td>
        </tr>
    </table>
</form>
        <a href="{{ route('pelanggans.index') }}" class="link-index">
            <center>Kembali ke Daftar Pelanggan</center> 
        </a>
    </div>
</body>
</html>
@endsection
