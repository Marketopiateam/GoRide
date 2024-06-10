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
            $table->bigInteger('service_id')->unsigned();
            $table->bigInteger('coupon_id')->unsigned();
            $table->bigInteger('driver_id')->unsigned();
            $table->bigInteger('payment_id')->unsigned();
            $table->boolean('paid')->default(0)->nullable();
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
            $table->string('destination_City')->nullable();
            $table->string('source_city')->nullable();
            $table->string('parcel_dimension')->nullable();
            $table->string('parcel_weight')->nullable();
            $table->string('when_dates')->nullable();
            $table->string('when_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
