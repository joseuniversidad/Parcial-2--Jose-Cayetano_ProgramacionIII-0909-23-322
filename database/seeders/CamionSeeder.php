<?php

namespace Database\Seeders;

use App\Models\Camion;
use App\Models\Marca;
use App\Models\Transporte;
use Illuminate\Database\Seeder;

class CamionSeeder extends Seeder
{
    public function run()
    {

        $marcas = Marca::all();
        $transportes = Transporte::all();
        

        if($marcas->isEmpty() || $transportes->isEmpty()) {
            return;
        }
        
        
        for ($i = 0; $i < 20; $i++) {
            Camion::factory()
                ->create([
                    'id_marca' => $marcas->random()->id_marca,
                    'id_transporte' => $transportes->random()->id_transporte,
                ]);
        }
    }
}