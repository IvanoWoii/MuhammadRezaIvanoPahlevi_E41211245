<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPrestasi extends Model
{
    use HasFactory;
    protected $table= 'daftar_prestasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nama_prestasi',
        'bidang_prestasi',
        'tahun_dapat_prestasi',
        'description'
    ];
}
