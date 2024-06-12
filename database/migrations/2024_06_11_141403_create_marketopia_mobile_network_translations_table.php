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
        Schema::create('marketopia_mobile_network_translations', function (Blueprint $table) {
            $table->id();
            $table->string('network');
            $table->string('locale')->index();
            $table->unsignedBigInteger('marketopia_mobile_network_id');
            $table->unique(['marketopia_mobile_network_id', 'locale'], 'mark_mob_work_id');
            $table->foreign('marketopia_mobile_network_id', 'mobile_network_3131')->references('id')->on('marketopia_mobile_networks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketopia_mobile_network_translations');
    }
};
