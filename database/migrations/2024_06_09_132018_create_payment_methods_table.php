<?php

use App\Models\PaymentMethod;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('api_key')->nullable();
            $table->string('integration_id')->nullable();
            $table->string('iframe_id')->nullable();
            $table->string('hmac')->nullable();
            $table->string('currency')->default('EGP');
            $table->string('base_url')->nullable();
            $table->string('url')->nullable();
            $table->string('token')->nullable();
            $table->string('credit_id')->nullable();
            $table->string('mada_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('account_key')->nullable();
            $table->string('iframe_key')->nullable();
            $table->string('mode')->default('test');
            $table->string('webhook_url')->nullable();
            $table->boolean('enabled')->default(false);
            $table->timestamps();
        });
        $methods = [
            'PAYMOB',
            'HYPERPAY',
            'KASHIER',
            'FAWRY',
            'PayPal',
            'THAWANI',
            'TAP',
            'OPAY',
            'Paytabs',
            'Binance',
            'NowPayments',
            'Payeer',
            'Perfectmoney',
            'TELR',
            'CLICKPAY',
            'COINPAYMENTS',
            'BigPay',
            'ENOT_KEY',
            'PAYCEC',
            'PAYPAL',
            'PRIME',
            'PAYLINK'
        ];
        foreach ($methods as $method) {
            PaymentMethod::create([
                'name' => $method,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
