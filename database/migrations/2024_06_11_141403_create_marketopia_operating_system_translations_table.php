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
        Schema::create('marketopia_operating_system_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('locale')->index();
            $table->unsignedBigInteger('marketopia_operating_system_id');
            $table->unique(['marketopia_operating_system_id', 'locale'], 'mark_op_s_id');
            $table->foreign('marketopia_operating_system_id', 'mos_423545')->references('id')->on('marketopia_operating_systems')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketopia_operating_system_translations');
    }
};
