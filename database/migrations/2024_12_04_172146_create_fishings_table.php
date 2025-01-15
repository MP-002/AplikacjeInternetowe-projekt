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
        Schema::create('fishings', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('godzina');
            $table->foreignId('angler_id')->constrained('anglers')->onDelete('cascade');
            $table->foreignId('fishingspot_id')->constrained('fishingspots')->onDelete('cascade');
            $table->foreignId('fish_id')->constrained('fish')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fishings');
    }
};
