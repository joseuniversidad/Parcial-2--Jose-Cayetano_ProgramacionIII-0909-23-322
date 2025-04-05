<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        // Crear marcas específicas
        $marcas = [
            'Volvo', 'Mercedes-Benz', 'Scania', 'MAN', 'DAF', 
            'Iveco', 'Kenworth', 'Freightliner', 'Peterbilt', 'Mack'
        ];
        
        for ($i=0; $i<100; $i++ ){
            DB::table('marca')->insert([
                'descripcion' => $faker->randomElement($marcas),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}