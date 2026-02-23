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
        Schema::create('loyaltys',function(Blueprint $table){
            $table->id();

            $table->string('name')->unique();
            $table->integer('main_points');
            $table->integer('discount_percentage');
            $table->integer('free_extra_hours');

            $table->timestamps();
            //hola
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
