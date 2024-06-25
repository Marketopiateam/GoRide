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
        Schema::create('driver_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();

            // Driver Berth Date
            $table->date('birth_date');
            // Driver ID Number
            $table->string('id_number', 50);
            // Criminal record Image
            $table->string('criminal_record_image', 255);
            // Driver Status
            $table->enum('status', ['active', 'blocked', 'pending'])->default('pending');
            // Driver Identity Image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_profiles');
    }
};
