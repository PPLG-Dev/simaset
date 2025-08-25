<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    /** @use HasFactory<\Database\Factories\TanahFactory> */
    use HasFactory;

    protected $table = 'tanah';

    protected $fillable = [
        'nama_tanah',
        'kode_tanah',
        'luas',
        'no_sertifikat',
    ];

    public function bangunan(){
        return $this->hasMany(Bangunan::class);
    }
}
