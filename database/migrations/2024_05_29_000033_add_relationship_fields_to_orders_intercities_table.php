<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersIntercitiesTable extends Migration
{
    public function up()
    {
        Schema::table('orders_intercities', function (Blueprint $table) {
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->foreign('driver_id', 'driver_fk_9827733')->references('id')->on('users');
            $table->unsignedBigInteger('intercityservice_id')->nullable();
            $table->foreign('intercityservice_id', 'intercityservice_fk_9827752')->references('id')->on('intercity_services');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_9827768')->references('id')->on('users');
        });
    }
}
