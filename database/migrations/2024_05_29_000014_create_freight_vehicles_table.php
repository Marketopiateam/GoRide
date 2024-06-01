<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('freight_vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description')->nullable();
            $table->boolean('enable')->default(0)->nullable();
            $table->string('height')->nullable();
            $table->string('image')->nullable();
            $table->string('km_charge')->nullable();
            $table->string('length')->nullable();
            $table->string('name')->nullable();
            $table->string('width')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
