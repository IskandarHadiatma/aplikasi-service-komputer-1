<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'id_komputer',
        'customer_id',
        'id_pegawai'
    ];

    protected $primaryKey = 'id_keluhan';
}
