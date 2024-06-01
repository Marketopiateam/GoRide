<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverUsersTable extends Migration
{
    public function up()
    {
        Schema::create('driver_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_code')->nullable();
            $table->boolean('document_verification')->default(0)->nullable();
            $table->string('email')->nullable();
            $table->longText('fcm_token')->nullable();
            $table->string('full_name')->nullable();
            $table->boolean('is_online')->default(0)->nullable();
            $table->string('login_type')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('reviews_count')->nullable();
            $table->string('reviews_sum')->nullable();
            $table->string('rotation')->nullable();
            $table->string('service')->nullable();
            $table->string('wallet_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
