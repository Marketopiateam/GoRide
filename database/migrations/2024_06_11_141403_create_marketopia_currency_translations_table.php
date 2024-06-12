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
        Schema::create('marketopia_currency_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('locale')->index();
            $table->unsignedInteger('marketopia_currency_id');
            $table->unique(['marketopia_currency_id', 'locale'], 'm_cu_id');
            $table->foreign('marketopia_currency_id', 'mark_co_34234')->references('id')->on('marketopia_currencies')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketopia_currency_translations');
    }
};
