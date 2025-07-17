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
        Schema::table('shopping_cart', function (Blueprint $table) {
            $table->unsignedBigInteger('user_fk');
            $table->foreign('user_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shopping_cart', function (Blueprint $table) {
             $table->dropColumn('user_fk');
        });
    }
};
