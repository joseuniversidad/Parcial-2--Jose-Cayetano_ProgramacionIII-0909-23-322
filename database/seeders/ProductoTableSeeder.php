<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('producto')->insert([
                'nombre_producto'          => 'Producto Ejemplo',
                'descripcion_producto'     => 'Este es un producto de ejemplo para demostración',
                'precio_producto'          => 100.00,
                'precio_venta_producto'    => 150.00,
                'fecha_vencimiento_producto' => '2025-12-31',
                'created_at'               => now(),
                'updated_at'               => now(),
    
            ]);
        }
    }
}
