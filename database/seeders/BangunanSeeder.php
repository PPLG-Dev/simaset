<?php

namespace Database\Seeders;

use App\Models\Bangunan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bangunan::factory()->count(10)->create();
    }
}
