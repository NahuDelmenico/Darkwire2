<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('games', function (Blueprint $table) {
            
            $table->unsignedTinyInteger('gamemode_fk');
            $table->foreign('gamemode_fk')->references('gamemode_id')->on('gamemodes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
             $table->dropColumn('gamemode_fk');
        });
    }
};
