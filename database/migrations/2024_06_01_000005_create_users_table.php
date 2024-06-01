<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->datetime('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('locale')->nullable();
            $table->string('country_code')->nullable();
            $table->string('fcm_token')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->string('login_type')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('reviews_count')->nullable();
            $table->string('reviews_sum')->nullable();
            $table->string('wallet_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
