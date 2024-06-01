<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('admin_commission')->nullable();
            $table->boolean('enable')->default(0)->nullable();
            $table->boolean('intercity_type')->default(0)->nullable();
            $table->string('km_charge')->nullable();
            $table->string('offer_rate')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
