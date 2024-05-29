<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('review_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment')->nullable();
            $table->string('date')->nullable();
            $table->string('rating')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
