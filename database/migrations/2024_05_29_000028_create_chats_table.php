<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name')->nullable();
            $table->string('customer_profile_image')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('driver_profile_image')->nullable();
            $table->string('last_message')->nullable();
            $table->string('last_sender')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
