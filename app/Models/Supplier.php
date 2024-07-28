<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers'; // Nama tabel di database

    protected $primaryKey = 'id_supplier'; // Primary key

    public $incrementing = false; // ID tidak auto increment

    protected $keyType = 'int'; // Tipe data primary key

    protected $fillable = [
        'id_supplier',
        'nama_supplier',
        'alamat',
        'no_hp',
        'id_barang',
    ];

    public $timestamps = false; // Nonaktifkan timestamp jika tidak digunakan

    // Definisikan relasi dengan model Barang jika diperlukan
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
