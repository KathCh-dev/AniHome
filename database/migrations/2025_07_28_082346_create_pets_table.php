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
        Schema::create('pets', function (Blueprint $table) {
            $table->uuid('pet_id')->primary();
            $table->string('pet_name');
            $table->integer('pet_age');
            $table->float('pet_weight');
            $table->float('pet_height');
            $table->string('pet_breed');
            $table->string('pet_particularity');
            $table->string('pet_treatment');
            $table->string('pet_special_needs');
            $table->string('pet_diet');
            $table->string('pet_sociability');
            $table->string('pet_allergy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
