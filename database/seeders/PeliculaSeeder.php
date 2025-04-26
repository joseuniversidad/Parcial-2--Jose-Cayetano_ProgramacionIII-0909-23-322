<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Pelicula::truncate(); // <<--- borra todo antes
    
        $nombresPeliculas = [
            'Pelicula 1',
            'Pelicula 2',
            'Pelicula 3',
            'Pelicula 4',
            'Pelicula 5',
            'Pelicula 6',
            'Pelicula 7',
            'Pelicula 8',
            'Pelicula 9',
            'Pelicula 10'
        ];  
    
        for ($i = 0; $i < 20; $i++) {
            Pelicula::create([
                'titulo' => $faker->randomElement($nombresPeliculas),
                'genero' => $faker->word,
                'puntuacion' => $faker->numberBetween(1, 10),
                'actor_principal' => $faker->name,
                'actor_secundario' => $faker->name,
                'fecha_publicacion' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        Pelicula::factory()->count(10)->create();
    }
}