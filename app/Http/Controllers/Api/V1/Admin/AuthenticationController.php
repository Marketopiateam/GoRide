<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SignUp;
use App\Models\PaymentMethod;
use App\Traits\MapsProcessing;
use App\Helpers\PaymentHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\AddAddressRequest;
use App\Repositoryinterface\UsersRepositoryinterface;

class AuthenticationController extends Controller
{
    use PaymentHelper;
    private $userRepositry;
    public function __construct(UsersRepositoryinterface $userRepositry)
    {
        $this->userRepositry = $userRepositry;
    }
    public function signup()
    {
        return $this->userRepositry->signup();
    }
    public function city($id)
    {
        return $this->userRepositry->city($id);
    }
    public function country()
    {
        return $this->userRepositry->country();
    }
    public function send_otp()
    {
        return $this->userRepositry->send_otp();
    }
    public function verify_otp()
    {
        return $this->userRepositry->verify_otp();
    }
    public function profile()
    {
        return $this->userRepositry->profile();
    }
    public function profile_update()
    {
        return $this->userRepositry->profile_update();
    }
    public function address_new()
    {
        return $this->userRepositry->address_new();
    }
    public function address()
    {
        return $this->userRepositry->address();
    }
    public function charge_wallet(Request $request)
    {
        $payment =    PaymentMethod::find($request->id);

        $payment = $this->tap($request->value );
        $redirect_url = $payment['redirect_url'];
        // $paymentjson =   json_encode($payment);
        // $order->payment_gateway_data = $paymentjson;
        // $order->payment_id = $payment['payment_id'];
        // $order->payment_method = $request['formData']['gateway'];
        // $order->save();
        return  $redirect_url ;
    }
}
