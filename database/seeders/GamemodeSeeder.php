<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamemodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('gamemodes')->insert([
    [
        'gamemode_id' => 1,
        'name' => 'Un Jugador',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 2,
        'name' => 'Multijugador',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 3,
        'name' => 'Cooperativo',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 4,
        'name' => 'Competitivo',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 5,
        'name' => 'Online',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 6,
        'name' => 'Local',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 7,
        'name' => 'PvP',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 8,
        'name' => 'PvE',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 9,
        'name' => 'Campaña',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 10,
        'name' => 'Sandbox',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 11,
        'name' => 'Battle Royale',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'gamemode_id' => 12,
        'name' => 'Modo Historia',
        'created_at' => now(),
        'updated_at' => now()
    ]
]);

    }
}
