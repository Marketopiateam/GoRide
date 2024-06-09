<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_id')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('payment_id')->nullable();
            $table->boolean('paid')->nullable();
            $table->string('distance')->nullable();
            $table->string('distance_type')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('destination_lat')->nullable();
            $table->string('destination_long')->nullable();
            $table->string('source_address')->nullable();
            $table->string('source_lat')->nullable();
            $table->string('source_long')->nullable();
            $table->string('offer_rate')->nullable();
            $table->string('final_rate')->nullable();
            $table->string('commission')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
