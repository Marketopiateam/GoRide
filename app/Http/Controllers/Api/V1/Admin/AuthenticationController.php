<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SignUp;
use App\Traits\MapsProcessing;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\AddAddressRequest;
use App\Repositoryinterface\UsersRepositoryinterface;

class AuthenticationController extends Controller
{

    private $userRepositry;
    public function __construct(UsersRepositoryinterface $userRepositry)
    {
        $this->userRepositry = $userRepositry;
    }
    public function signup() {
       return $this->userRepositry->signup();
    }
    public function city() {
       return $this->userRepositry->city();
    }
    public function send_otp() {
       return $this->userRepositry->send_otp();
    }
    public function verify_otp() {
       return $this->userRepositry->verify_otp();
    }
    public function profile() {
       return $this->userRepositry->profile();
    }
    public function profile_update() {
       return $this->userRepositry->profile_update();
    }
    public function address_new( ) {
       return $this->userRepositry->address_new();
    }
    public function address() {
       return $this->userRepositry->address();
    }
}
