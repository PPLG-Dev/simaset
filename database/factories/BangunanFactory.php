<?php

namespace Database\Factories;

use App\Models\Tanah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bangunan>
 */
class BangunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_bangunan' => fake()->word(),
            'kode_bangunan' => fake()->unique()->word(),
            'tanah_id' => Tanah::factory(),
        ];
    }
}
