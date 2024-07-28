<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; // Nama tabel di database
    protected $primaryKey = 'id_barang';
    public $timestamps = true;

    protected $fillable = [
        'nama_barang', 'merek', 'harga', 'stok', 'satuan',
    ];
}
