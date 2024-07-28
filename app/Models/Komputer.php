<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    protected $table = 'komputers'; // Nama tabel di database

    protected $primaryKey = 'id_komputer'; // Primary key

    public $incrementing = false; // ID tidak auto increment

    protected $keyType = 'string'; // Tipe data primary key

    protected $fillable = [
        'id_komputer',
        'nama_komputer',
        'merek',
        'harga',
        'stok',
        'satuan',
    ];

    public $timestamps = false; // Nonaktifkan timestamp jika tidak digunakan
}
