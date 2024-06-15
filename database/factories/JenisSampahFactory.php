<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jenisSampah>
 */
class JenisSampahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'satuan_barang' => fake()->word(),
            'harga' => fake()->randomNumber(fake()->numberBetween(3,6)),
        ];
    }
}
