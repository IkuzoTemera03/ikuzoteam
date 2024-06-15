<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\jenisSampah;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tiketSampah>
 */
class TiketSampahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $js = jenisSampah::all()->pluck('id')->toArray();
        $users = User::all()->pluck('id')->toArray();
        $id = fake()->randomElement($js);
        $jenisSampah = jenisSampah::find($id);
        $harga = $jenisSampah->harga;
        $jumlah = fake()->randomNumber(2);
        return [
            'jenis_sampah_id' => fake()->randomElement($js),
            'penukar_id' => fake()->randomElement($users),
            'jumlah' => $jumlah,
            'total_harga' => $jumlah * $harga,
            'alamat' => fake()->address(),
            'status_sampah' => fake()->boolean(),
        ];
    }
}
