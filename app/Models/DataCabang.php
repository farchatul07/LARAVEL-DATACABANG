<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCabang extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_cabang';
    

    protected $fillable = [
        'nama_cabang',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'nomer_telepon',
        'email',
        'deskripsi',
    ];
}