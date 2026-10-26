<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
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
                <button type="submit">Simpan Perubahan</button>
                <a href="{{ route('pelanggans.index') }}">Batal</a>
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