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
        Schema::create('marketopia_sub_continent_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('locale')->index();
            $table->unsignedInteger('marketopia_sub_continent_id');
            $table->unique(['marketopia_sub_continent_id', 'locale'], 'mark_sub_cont_id');
            $table->foreign('marketopia_sub_continent_id', 'm_s_c_234234')->references('id')->on('marketopia_sub_continents')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketopia_sub_continent_translations');
    }
};
