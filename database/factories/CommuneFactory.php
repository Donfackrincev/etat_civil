<?php

namespace Database\Factories;

use App\Models\Departement;
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
            'nom_commune' => fake()->name(),
            'ville' => fake()->name(),
            'arrondissement' => fake()->name(),
            'numero' => fake()->phoneNumber(),
            'email' =>fake()->unique()->safeEmail(),
            'departement_id' =>  Departement::inRandomOrder()->first()->ville,

            'created_at' => now()
        ];
    }
}
