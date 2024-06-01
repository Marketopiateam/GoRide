<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntercityServicesTable extends Migration
{
    public function up()
    {
        Schema::create('intercity_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('enable')->default(0)->nullable();
            $table->string('image')->nullable();
            $table->string('km_charge')->nullable();
            $table->longText('admin_commission')->nullable();
            $table->boolean('offer_rate')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
