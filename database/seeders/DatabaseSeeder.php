<?php

namespace Database\Seeders;

use App\Models\Bangunan;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Ruangan;
use App\Models\Tanah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        // TanahSeeder.php
        Tanah::factory(10)->create();
        // BangunanSeeder.php
        Bangunan::factory(10)->create();
        // RuanganSeeder.php
        Ruangan::factory(10)->create();
        // KategoriSeeder.php
        Kategori::factory(10)->create();
        // BarangSeeder.php
        Barang::factory(10)->create();
    }
}
