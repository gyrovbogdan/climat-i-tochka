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
        Schema::create('conditioner_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conditioner_id')->references('id')->on('conditioners');
            $table->string('name');
            $table->enum('area', config('global.areas'));
            $table->integer('price');
            $table->integer('promo_price')->nullable();
            $table->string('performance_cold')->nullable();
            $table->string('performance_warm')->nullable();
            $table->string('power_input_cold')->nullable();
            $table->string('power_input_warm')->nullable();
            $table->string('indoor_sizes')->nullable();
            $table->boolean('wi-fi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditioner_models');
    }
};
