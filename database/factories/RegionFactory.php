<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_region' => fake()->name(), 
            'nom_pays' => fake()->name(), 
            'chef_lieu' => fake()->name(), 
            'created_at' => now()
        ];
    }
}
