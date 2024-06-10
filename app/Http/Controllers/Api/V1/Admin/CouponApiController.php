<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Http\Resources\Admin\CouponResource;
use App\Models\Coupon;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CouponApiController extends Controller
{
    public function verifycoupon(Request $request)
    {

        return    resp('','Valid',200) ;
    }


}
