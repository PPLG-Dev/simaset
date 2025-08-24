<?php

namespace Database\Factories;

use App\Models\Bangunan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruangan>
 */
class RuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_ruangan' => fake()->sentence(),
            'kode_ruangan' => fake()->unique()->word(),
            'bangunan_id' => Bangunan::factory(),
        ];
    }
}
