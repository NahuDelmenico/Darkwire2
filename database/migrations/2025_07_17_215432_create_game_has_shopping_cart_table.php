<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('game_has_shopping_cart', function (Blueprint $table) {
            $table->id();

            $table->unsignedTinyInteger('game_fk');
            $table->foreign('game_fk')->references('game_id')->on('games');

            $table->unsignedTinyInteger('shopping_cart_fk');
            $table->foreign('shopping_cart_fk')->references('shopping_cart_id')->on('shopping_cart');

            $table->integer("amount");
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('game_has_shopping_cart', function (Blueprint $table) {
             $table->dropColumn('game_fk');
             $table->dropColumn('shopping_cart_fk');
        });
    }
};
