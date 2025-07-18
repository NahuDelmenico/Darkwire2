<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gamemode;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        $this->call([
            AnnouncementSeeder::class,
            UserSeeder::class,
            GamemodeSeeder::class,
            CategorySeeder::class,
            GameSeeder::class

        ]);
    }
}
