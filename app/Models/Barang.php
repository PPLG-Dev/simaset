<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;

    protected $table = 'barangs';
    
    protected $fillable = [
        'nama_barang',
        'kode_inventaris',
        'kategori_id',
        'ruangan_id',
        'tahun_pengadaan',
        'sumber_dana',
        'kondisi',
    ];

    function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    function ruangan() {
        return $this->belongsTo(Ruangan::class);
    }
}
