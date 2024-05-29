<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->string('decimal_digits')->nullable();
            $table->boolean('enable')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->boolean('symbol_at_right')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
