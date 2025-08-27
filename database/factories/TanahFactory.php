<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tanah>
 */
class TanahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_tanah' => fake()->word(),
            'kode_tanah' => fake()->unique()->word(),
            'luas' => fake()->word(),
            'no_sertifikat' => fake()->randomNumber(),
        ];
    }
}
