<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')-> insert([
            'id'        => 1, 
            'name'      => 'admin', 
            'email'     => 'user@admin.com', 
            'password'  => Hash::make('1234'),
            'created_at' => now(), 
            'updated_at' => now()
        ]);
    }
}
