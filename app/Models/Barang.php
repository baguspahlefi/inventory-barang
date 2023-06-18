<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'jenis_barang',
        'stok_barang',
        'harga_barang',
        'tgl_masuk_barang',
    ];
}
