<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    /** @use HasFactory<\Database\Factories\RuanganFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_ruangan',
        'kode_ruangan',
        'bangunan_id',
    ];

    function bangunan(){
        return $this->belongsTo(Bangunan::class);
    }

    function barang() {
        return $this->hasMany(Barang::class);
    }
}
