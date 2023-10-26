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
        \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'maicon.talgatti',
             'email' => 'maicon.talgatti@ampla.ind.br',
             'password' => '$2y$10$amaLZThDc01DdiL/31ChR.jE4XL86Ayof9Aps8X7MbopwUgIK08vS',
         ]);
    }
}
