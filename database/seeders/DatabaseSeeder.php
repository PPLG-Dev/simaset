<?php

namespace Database\Seeders;

use App\Models\Bangunan;
use App\Models\User;
use App\Models\Tanah;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $Tanah = Tanah::create([
            'nama_tanah' => 'Tanah Contoh',
            'kode_tanah' => 'TC001',
            'luas' => 500,
            'no_sertifikat' => 'SERT001',
        ]);
        
        $this->call([
            TanahSeeder::class,
            RuanganSeeder::class,
            BangunanSeeder::class,
            KategoriSeeder::class,
            BarangSeeder::class,
        ]);
    }
}
