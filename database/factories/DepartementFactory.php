<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_pays' => fake()->name(),
            'region_id' =>  Region::inRandomOrder()->first()->id,
            'nom_departement' => fake()->name(),
            'created_at' => now()
        ];
    }
}
