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
            $table->string('accepted_driver')->nullable();
            $table->longText('admin_commission')->nullable();
            $table->string('destination_location_name')->nullable();
            $table->longText('destination_location_l_at_lng')->nullable();
            $table->string('distance')->nullable();
            $table->string('distance_type')->nullable();
            $table->string('driver')->nullable();
            $table->string('final_rate')->nullable();
            $table->string('offer_rate')->nullable();
            $table->string('otp')->nullable();
            $table->boolean('payment_status')->default(0)->nullable();
            $table->string('payment_type')->nullable();
            $table->longText('position')->nullable();
            $table->string('rejected_driver')->nullable();
            $table->string('service')->nullable();
            $table->string('source_location_l_at_lng')->nullable();
            $table->string('source_location_name')->nullable();
            $table->string('status')->nullable();
            $table->string('tax_list')->nullable();
            $table->string('update_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
