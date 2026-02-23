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
        Schema::create('rentails', function (Blueprint $table) {
            $table->id();
            
            $table->date('pickup_date')->nullable();
            $table->date('return_date')->nullable();

            $table->integer('total_amount');
            $table->enum('status',['pending','confirmed','active','completed','canceled'])->dafauñt('pending');
           
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->foreignId('drive_id')->references('id')->on('drivers');

            
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
