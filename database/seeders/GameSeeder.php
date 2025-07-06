<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('games')->insert([
    [
        'game_id' => 1,
        'name' => 'Counter Strike: Global Offensive',
        'description' => 'Juego de disparos en primera persona competitivo en línea.',
        'price' => 20000,
        'release_at'=> '2013-03-03',
        'category_fk' => 1,
        'gamemode_fk' => 1,
        'discount' => 0,
        'logo' => 'csgo_logo.png',
        'cover' => 'csgo_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 2,
        'name' => 'The Witcher 3: Wild Hunt',
        'description' => 'RPG de mundo abierto con historia profunda y personajes memorables.',
        'price' => 25000,
        'release_at'=> '2015-05-19',
        'category_fk' => 2,
        'gamemode_fk' => 2,
        'discount' => 10,
        'logo' => 'witcher3_logo.png',
        'cover' => 'witcher3_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 3,
        'name' => 'Minecraft',
        'description' => 'Juego de construcción, exploración y supervivencia en un mundo cúbico.',
        'price' => 15000,
        'release_at'=> '2011-11-18',
        'category_fk' => 3,
        'gamemode_fk' => 3,
        'discount' => 5,
        'logo' => 'minecraft_logo.png',
        'cover' => 'minecraft_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 4,
        'name' => 'Grand Theft Auto V',
        'description' => 'Juego de acción y aventura en mundo abierto.',
        'price' => 30000,
        'release_at'=> '2013-09-17',
        'category_fk' => 1,
        'gamemode_fk' => 4,
        'discount' => null,
        'logo' => 'gta5_logo.png',
        'cover' => 'gta5_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 5,
        'name' => 'Red Dead Redemption 2',
        'description' => 'Aventura épica en el viejo oeste.',
        'price' => 32000,
        'release_at'=> '2018-10-26',
        'category_fk' => 2,
        'gamemode_fk' => 4,
        'discount' => 15,
        'logo' => 'rdr2_logo.png',
        'cover' => 'rdr2_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 6,
        'name' => 'League of Legends',
        'description' => 'MOBA competitivo con millones de jugadores.',
        'price' => 0,
        'release_at'=> '2009-10-27',
        'category_fk' => 4,
        'gamemode_fk' => 3,
        'discount' => null,
        'logo' => 'lol_logo.png',
        'cover' => 'lol_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 7,
        'name' => 'FIFA 24',
        'description' => 'Simulador de fútbol realista.',
        'price' => 27000,
        'release_at'=> '2023-09-29',
        'category_fk' => 5,
        'gamemode_fk' => 5,
        'discount' => 5,
        'logo' => 'fifa24_logo.png',
        'cover' => 'fifa24_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 8,
        'name' => 'Cyberpunk 2077',
        'description' => 'RPG futurista en una ciudad distópica.',
        'price' => 29000,
        'release_at'=> '2020-12-10',
        'category_fk' => 2,
        'gamemode_fk' => 2,
        'discount' => 20,
        'logo' => 'cyberpunk_logo.png',
        'cover' => 'cyberpunk_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 9,
        'name' => 'Hades',
        'description' => 'Roguelike de acción en la mitología griega.',
        'price' => 18000,
        'release_at'=> '2020-09-17',
        'category_fk' => 3,
        'gamemode_fk' => 2,
        'discount' => 10,
        'logo' => 'hades_logo.png',
        'cover' => 'hades_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 10,
        'name' => 'Among Us',
        'description' => 'Juego multijugador de deducción social.',
        'price' => 5000,
        'release_at'=> '2018-06-15',
        'category_fk' => 4,
        'gamemode_fk' => 3,
        'discount' => 50,
        'logo' => 'amongus_logo.png',
        'cover' => 'amongus_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 11,
        'name' => 'Valorant',
        'description' => 'FPS táctico con agentes únicos.',
        'price' => 0,
        'release_at'=> '2020-06-02',
        'category_fk' => 1,
        'gamemode_fk' => 1,
        'discount' => null,
        'logo' => 'valorant_logo.png',
        'cover' => 'valorant_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ],
    [
        'game_id' => 12,
        'name' => 'Stardew Valley',
        'description' => 'Simulador de granja con elementos RPG.',
        'price' => 12000,
        'release_at'=> '2016-02-26',
        'category_fk' => 3,
        'gamemode_fk' => 2,
        'discount' => 30,
        'logo' => 'stardew_logo.png',
        'cover' => 'stardew_cover.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ]
]);

}

}
