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
        'logo' => 'covers/pgFdFCApAAKAogwUCIm280OLCy2lIu5EqGoiz4lw.png',
        'cover' => 'covers/ceFqedgBsi0FQDs1l2FeuUeMYW8BaH1IMH7nXCFh.png',
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
        'logo' => 'covers/s52B69kBMK3dTwD9rtE5mtDeReVlAoMAZf5qNQk1.jpg',
        'cover' => 'covers/nIYQ6FrHwGHss6G7spGC0guhW1HugWnUJzJoP4Ti.jpg',
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
        'logo' => 'covers/dGlcVO6juxesL0p5vxxh8t2espNy4pRQIhuO7JlH.jpg',
        'cover' => 'covers/xfyMi9qv9EZAMeKASh8eTQSdYLeC1sqIslK15jqd.jpg',
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
        'logo' => 'covers/yfKaWr47b1hJ9FXopVMUmqlje7HCXsPzMHZmFSso.jpg',
        'cover' => 'covers/UWN4UNl0o37MU90yRtZSn5NyAr0vkZtD496hLnu1.webp',
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
        'logo' => 'covers/c8uqqsqpbCRAmfi99rQktIpQspxsTwE9ziGVLjWN.jpg',
        'cover' => 'covers/XEhDnGB6kfIu02CPa4uwE9VAEUeAQDWbLcWqP1bz.webp',
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
        'logo' => 'covers/sbgpsOISoT6jaBbSvQTkzzDtQB570QQebErvrxhJ.avif',
        'cover' => 'covers/iST7X3wpXxq3wGTxPE20c4Ch3BIPM1kRmIawUOH7.avif',
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
        'logo' => 'covers/ELjeqoV4REzXqtHrBNZt72EoVq6Va81X0RHu1ioy.jpg',
        'cover' => 'covers/D7EwFpDtAk3z4YJPH3odbwAleu0iRoVy1tDKYz8M.jpg',
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
        'logo' => 'covers/SrKK2IoTSfcnTuaLYtVLnVMJsZR3h3UhS4o96exF.jpg',
        'cover' => 'covers/U7DlsDUQlfogy3drptYTl3xXm4BUjFg4gp3DpqjM.jpg',
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
        'logo' => 'covers/LCXxpR6W52QOszy6gXFZi5kYN9s0BEwZ9ym0Vfpy.avif',
        'cover' => 'covers/GAstAQ8amZ5dIqP151HXdd5e4SJIlOXj2Pez3oKm.avif',
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
        'logo' => 'covers/Iztoe4n6uXH5CggrDJDNSRWiRlA64rG9HQ9f6zbL.avif',
        'cover' => 'covers/inhFB85wSGrB6ylGYE5FnETeYAt8CqUkWJivMAd4.avif',
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
        'logo' => 'covers/7KXsujMbs8cXXNxLaTX78dZlxK4hptDrn71BFrBh.jpg',
        'cover' => 'covers/OxpFcdD3YOy2t20t8aekYJ5Xju5Y8v6YvTDBxCFk.jpg',
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
        'logo' => 'covers/TrdEdw3U9qKiojTuWn0Dqqfzc9QUxWn7Ji0RARlI.jpg',
        'cover' => 'covers/AcCUm1kNUNH4jTcxQsXZC1giwMovLigy8Z8Cd4TR.jpg',
        'created_at' => now(),
        'updated_at' => now()
    ]
]);

}

}
