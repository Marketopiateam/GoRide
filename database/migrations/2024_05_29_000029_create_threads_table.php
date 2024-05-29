<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('message')->nullable();
            $table->string('message_type')->nullable();
            $table->string('url')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
