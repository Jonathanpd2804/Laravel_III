<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PublicacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'usuario_id' => User::all()->random()->id,
            'titulo' => $this->faker->sentence(50),
            'publicacion' => $this->faker->text(250),
            'fecha' => $this->faker->dateTimeBetween('-120 years', '-1 years'),

        ];
    }

    
    
}
