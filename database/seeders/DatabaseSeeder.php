<?php

namespace Database\Seeders;

use App\Models\jenisSampah;
use App\Models\tiketSampah;
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

        User::create([
            'name' => 'Maulana Malik Ibrahim Lubis',
            'email' => 'ikuzoteam@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Hash::make('password'),
        ]);
        User::factory(20)->create();
        jenisSampah::factory(20)->create();
        tiketSampah::factory(100)->create();
    }
}
