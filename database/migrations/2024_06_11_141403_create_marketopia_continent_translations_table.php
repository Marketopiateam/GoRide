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
        Schema::create('marketopia_continent_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('locale')->index();
            $table->unsignedInteger('marketopia_continent_id');
            $table->unique(['marketopia_continent_id', 'locale'], 'marketopia_ent_id');
            $table->foreign('marketopia_continent_id', 'marketopia_ent_1098')->references('id')->on('marketopia_continents')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketopia_continent_translations');
    }
};
