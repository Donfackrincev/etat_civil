<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);
        //   \App\Models\Commune::factory(5)->create();
          \App\Models\Personne::factory(50)->create();
        \App\Models\Region::factory(10)->create();
          \App\Models\Departement::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
          \App\Models\User::create([
               'name' => 'Admin',
            'email' => 'admin@gmail.com',
              'password' => 'admin',
          ]);
    }
}
