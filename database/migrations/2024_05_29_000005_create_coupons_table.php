<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount');
            $table->string('code');
            $table->string('start_at')->nullable();
            $table->string('end_at')->nullable();
            $table->string('max_usage')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
