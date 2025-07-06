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
         DB::table('games') -> insert([
            [
                'game_id' => 1,
                'name' => 'Counter Strike Global Ofensive',
                'description' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'price' => 20000,
                'release_at'=> '2013-03-03',
                'category_fk' => 1,
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ]);
    }
}
