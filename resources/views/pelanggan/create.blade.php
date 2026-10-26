<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tambah data Pelanggan</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        h1 {
            display: flex;
            justify-content: center;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>HALAMAN TAMBAH PELANGGAN</h1>
    <form action="{{ route('pelanggans.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="kode_pelanggan">Kode Pelanggan</label></td>
                <td>:</td>
                <td>
                    <input type="text" name="kode_pelanggan"
                        id="kode_pelanggan" required>
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
                    <option value="1">Reguler</option>
                    <option value="2">Premium</option>
                    <option value="3">VIP</option>
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
                <td colspan="2" align="center">
                    <button type="submit">Simpan Pelanggan</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
            
        </table>
    </form>

    <p>
        <a href="{{ route('pelanggans.index') }}">
            <center>Kembali ke Produk</center> 
        </a>
    </p>
</body>
</html>