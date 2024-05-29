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
            $table->string('decimal_digits');
            $table->boolean('enable')->default(0);
            $table->string('name');
            $table->string('symbol');
            $table->boolean('symbol_at_right')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
