<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('back_side')->default(0)->nullable();
            $table->boolean('enable')->default(0)->nullable();
            $table->boolean('expire_at')->default(0)->nullable();
            $table->boolean('front_side')->default(0)->nullable();
            $table->string('title')->nullable();
            $table->boolean('is_deleted')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
