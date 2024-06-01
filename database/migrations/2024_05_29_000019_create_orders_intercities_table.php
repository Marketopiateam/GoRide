<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersIntercitiesTable extends Migration
{
    public function up()
    {
        Schema::create('orders_intercities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accepted_driver')->nullable();
            $table->string('admin_commission')->nullable();
            $table->string('comments')->nullable();
            $table->string('destination_city')->nullable();
            $table->string('destination_location_lat_lng')->nullable();
            $table->string('destination_location_name')->nullable();
            $table->string('distance')->nullable();
            $table->string('distance_type')->nullable();
            $table->string('final_rate')->nullable();
            $table->longText('intercity_service')->nullable();
            $table->string('number_of_passenger')->nullable();
            $table->string('offer_rate')->nullable();
            $table->string('otp')->nullable();
            $table->string('parcel_dimension')->nullable();
            $table->string('parcel_image')->nullable();
            $table->string('parcel_weight')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('position')->nullable();
            $table->string('rejected_driver')->nullable();
            $table->string('source_city')->nullable();
            $table->string('source_location_lat_lng')->nullable();
            $table->string('source_location_name')->nullable();
            $table->string('status')->nullable();
            $table->string('tax_list')->nullable();
            $table->string('when_dates')->nullable();
            $table->string('when_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
