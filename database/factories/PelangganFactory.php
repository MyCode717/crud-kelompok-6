<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_pelanggan' =>fake()->unique()->numerify('PLG-######'),
            'nama' =>fake('id_ID')->name(),
            'kategori' =>fake()->randomElement([
                'Reguler',
                'Premium',
                'VIP'
            ]),
            'email' =>fake()->unique()->safeEmail(),
            'tanggal_daftar' =>fake()->dateTimeBetween('-2 years','now')->format('Y-m-d'),
            'alamat' =>fake('id_ID')->address(),
            'keterangan' =>fake()->optional(0.7)->sentence(),
        ];
    }
}
