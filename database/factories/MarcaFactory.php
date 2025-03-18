<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MarcaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
            $marcasCamiones = ['Volvo', 'Mercedes-Benz', 'Scania', 'MAN', 'DAF', 'Iveco', 'Kenworth', 'Freightliner', 'Peterbilt', 'Mack'];
        
            return [
                'descripcion' => $this->faker->randomElement($marcasCamiones),
        ];
    }
}
