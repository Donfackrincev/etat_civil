<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commune>
 */
class CommuneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(), 
            'ville' => fake()->name(), 
            'quartier' => fake()->name(), 
            'departement' => fake()->name(), 
            'numero' => fake()->phoneNumber(), 
            'email' =>fake()->unique()->safeEmail(),
            'created_at' => now()
        ];
    }
}
