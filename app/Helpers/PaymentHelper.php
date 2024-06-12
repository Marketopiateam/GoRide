<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Auth;
use Nafezly\Payments\Classes\TapPayment;

trait PaymentHelper
{


    public function tap($amount)
    {
        $user = Auth::user();
        $payment = new TapPayment();
        $res = $payment->pay(
            $amount,
            $user_id            = $user->id,
            $user_first_name    = $user->name,
            $user_last_name     = $user->name,
            $user_email         = $user->email ,
            $user_phone         = $user->phone,
        );

        return $res;
    }
}
