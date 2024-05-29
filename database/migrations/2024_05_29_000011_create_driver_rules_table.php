<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverRulesTable extends Migration
{
    public function up()
    {
        Schema::create('driver_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('enable')->default(0)->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_deleted')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
