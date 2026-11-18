
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tambah data Pelanggan baru</title>
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
        <h1>HALAMAN MENAMBAH DATA PELANGGAN BARU</h1>

        <form action="{{ route('pelanggans.store') }}" method="POST">
            @csrf

            <table>
                <tr>
                    <td><label for="kode_pelanggan">Kode Pelanggan</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode_pelanggan"
                            id="kode_pelanggan" placeholder="contoh 'PLG-001000'" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama"
                            id="nama" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="kategori">Kategori</label></td>
                    <td>:</td>
                    <td>
                        <select name="kategori"
                            id="kategori" required>
                            <option value="Reguler">Reguler</option>
                            <option value="Premium">Premium</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email</label></td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email"
                            id="email" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="tanggal_daftar">Tanggal Daftar</label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_daftar"
                            id="tanggal_daftar" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat"
                            rows="3" required></textarea>
                    </td>
                </tr>

                <tr>
                    <td><label for="keterangan">Keterangan</label></td>
                    <td>:</td>
                    <td>
                        <textarea name="keterangan" id="keterangan"
                            rows="3"></textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" class="button-green">
                            Simpan data Pelanggan baru
                        </button>

                        <button type="reset" class="button-red">
                            Reset
                        </button>
                    </td>
                </tr>
            </table>
        </form>

        <a href="{{ route('pelanggans.index') }}" class="link-index">
            <center>Kembali ke halaman daftar pelanggan</center>
        </a>
    </div>

    <p></p>
</body>
</html>
@endsection
