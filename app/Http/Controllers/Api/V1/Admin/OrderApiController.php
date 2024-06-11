<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Events\TripCreated;
use Gate;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\Admin\OrderResource;

class OrderApiController extends Controller
{

    public function getprice(Request $request)
    {
        $Service = Service::find($request->service_id);
        $response = distancematrix($request->origin, $request->destination);
        $km = $response['rows'][0]['elements'][0]['distance']['value'] / 1000;
        $result['km'] = $km;
        $result['price'] = number_format($km *  $Service->km_charge, 2);
        $result['min'] = number_format(($response['rows'][0]['elements'][0]['duration']['value'] / 60));
        return  $result;
    }

    public function startorder(StoreOrderRequest $request)
    {

        $validatedData = $request->validated();
        $validatedData['user_id'] = 1;

        $order = Order::create($validatedData);

        TripCreated::dispatch($order );
        // return (new OrderResource($order))
        //     ->response()
        //     ->setStatusCode(Response::HTTP_CREATED);
    }

    public function get_my_order(Request $request)
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
    }
}
