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
        Schema::create('conditioners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('images')->nullable();
            $table->string('brand');
            $table->string('country');
            $table->text('description');
            $table->enum('type', config('global.types'));
            $table->boolean('inverter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditioners');
    }
};
