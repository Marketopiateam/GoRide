<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount')->nullable();
            $table->string('note')->nullable();
            $table->string('order_type')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('transaction')->nullable();
            $table->string('user_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
