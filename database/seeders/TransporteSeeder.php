<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransporteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        if (Transporte::count() > 0) {
            return;
        }

        $nombresTransportes = [
            'Transporte 1',
            'Transporte 2',
            'Transporte 3',
            'Transporte 4',
            'Transporte 5',
            'Transporte 6',
            'Transporte 7',
            'Transporte 8',
            'Transporte 9',
            'Transporte 10'
        ];

        for ($i = 0; $i < 100; $i++) {
            Transporte::create([
                'codigo' => 'TR-' . strtoupper($faker->unique()->bothify('??###')),
                'nombre' => $faker->randomElement($nombresTransportes),
                'razon_social' => $faker->company,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Transporte::factory()->count(10)->create();
    }
}
