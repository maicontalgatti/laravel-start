<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Inserir dados na tabela 'users'
        DB::table('users')->insert([
            'name' => 'Maicon Talgatti',
            'email' => 'maicon.talgatti@ampla.ind.br',
            'password' => bcrypt('allenweg'),
        ]);
    }
}
