<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('categories') -> insert([
            [
                'category_id' => 1,
                'name' => 'FPS',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 2,
                'name' => 'Supervivencia',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 3,
                'name' => 'Aventura',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 4,
                'name' => 'Arcade',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 5,
                'name' => 'Estrategia',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 6,
                'name' => 'Militares',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 7,
                'name' => 'Realidad Virtual',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 8,
                'name' => 'Rol',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ,
            [
                'category_id' => 9,
                'name' => 'Disparos',
                'created_at' => now(),
                'updated_at' =>now()
            ]
            ]);
    }
}

