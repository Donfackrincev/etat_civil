<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersonneFactory extends Factory
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
            'prenom' => fake()->name(), 
            'numero' => fake()->phoneNumber(), 
            'email' => fake()->unique()->safeEmail(),
            'domicile' => fake()->name(), 
            'cni' => fake()->name(), 
            'nationaliter' => fake()->name(), 
            'profession' => fake()->name(), 
            'date_naissance' => fake()->date(), 
            'lieu_naissance' => fake()->name(), 
            'nom_pere' => fake()->name(), 
            'nom_mere' => fake()->name(), 
            'sexe' => fake()->randomElement(['Masculin', 'Feminin']), 
            'photo' => fake()->title(), 
            'created_at' => now()
        ];
    }
}
