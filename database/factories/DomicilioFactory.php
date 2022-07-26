<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domicilio>
 */
class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> \App\Models\User::factory(),
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->randomDigit(),
            'colonia' => fake()->name(),
            'cp' => fake()->postcode(), 
            'ciudad' => fake()->city(),
            'fecha_nacimiento'=>fake()->dateTimeThisDecade(),
        ];
    }
}
