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
        Schema::create('cars',function(Blueprint $table){
            $table->id();

            $table->string('model');
            $table->integer('year');
            $table->string('color');
            $table->string('license_plate')->unique();
            $table->integer('mileage');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->integer('is_premiun');
            $table->integer('rentail_count');
            $table->integer('daily_rate');
            $table->enum('status',['avaible','rented','maintenance','retired'])->dafauñt('avaible');

            $table->foreignId('brand_id')->constrained('brands');

            $table->timestamps();
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
