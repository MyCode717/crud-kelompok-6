<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    /** @use HasFactory<\Database\Factories\PelangganFactory> */
    use HasFactory;

    protected $fillable = ['kode_pelanggan', 'nama', 'kategori', 'email', 'tanggal_daftar', 'alamat', 'keterangan'];

    protected $casts = [
        'tanggal_daftar' => 'date',
    ];
}
