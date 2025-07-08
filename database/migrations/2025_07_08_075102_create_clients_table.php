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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('client_id')->primary();
            $table->string('client_name');
            $table->string('client_firstName');
            $table->string('client_streetNumber');
            $table->string('client_streetName');
            $table->string('client_postcode');
            $table->string('client_city');
            $table->string('client_number');
            $table->string('client_email');
            $table->string('client_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
