<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Events\TripCancel;
use App\Events\TripCreated;
use App\Events\TripOffers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderWithDriverResource;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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

    public function getorders(Request $request)
    {
        $order =  Order::where('inter_city', $request->in_city)->get();
        $order =  OrderResource::collection($order);
        return Resp($order, 'success');
    }
    public function cancelorder(Request $request, Order $order)
    {
        $order->update(['is_canceled' => Carbon::now(), 'status' => 'canceled', 'canceled_by' => Auth::user()->id]);
        TripCancel::dispatch($order);
        return Resp($order, 'success');
    }

    public function neworder(StoreOrderRequest $request)
    {
        $data = [
            'service_id'        => $request->service_id ?? '',
            'driver_id'         => null,
            'distance'          => $request->distance ?? '',
            'distance_type'     => 'km',
            'destination_address'  => $request->destination_address ?? '',
            'destination_lat'   => $request->destination_lat ?? '',
            'destination_long'  => $request->destination_long ?? '',
            'source_address'       => $request->source_address ?? '',
            'source_lat'        => $request->source_lat ?? '',
            'source_long'       => $request->source_long ?? '',
            'offer_rate'        => $request->offer_rate ?? '0',
            'final_rate'        => $request->final_rate ?? '0',
            'status'            => 'searching',
            'user_id'           => Auth::user()->id,
        ];
        $order = Order::create($data);
        $order =  Order::with('user')->find($order->id);
        TripCreated::dispatch($order);
        return Resp(new OrderResource($order), 'success');
    }

    public function startorder(Request $request, Order $order)
    {
        $order->update(['accepted_driver' => Carbon::now(), 'status' => 'started']);
        TripCreated::dispatch($order);
        return Resp('', 'success');
    }

    public function acceptorder(Request $request, Order $order)
    {
        $order->update(['is_accept' => Carbon::now(), 'status' => 'placed', 'driver_id' => Auth::user()->id]);
        TripCreated::dispatch($order);
        return Resp($order, 'success');
    }
    public function offerorder(Request $request, Order $order, $offer)
    {
        $order->update(['is_accept' => Carbon::now(), 'is_accept' => Carbon::now()]);
        $order->offerdriver = $offer;

        $user = User::with(['profile', 'profile.driver_cars', 'profile.driver_cars.brand', 'profile.driver_cars.model'])->find(Auth::user()->id);
        $order->driver_name      = $user->full_name;
        $order->driver_phone     = $user->phone_number ?? '';
        $order->car_color        = $user->profile->driver_cars->color  ?? '';
        $order->car_number       = $user->profile->car_licenses->car_number ?? '';
        $order->car_brand        = $user->profile->driver_cars->brand->title ?? '';
        $order->car_model        = $user->profile->driver_cars->model->title ?? '';
        TripOffers::dispatch($order);
        return Resp(new OrderWithDriverResource($order), 'success');
    }

    public function endorder(Request $request, Order $order)
    {
        $order->update(['is_end' => Carbon::now()]);
        TripCreated::dispatch($order);
        return Resp('', 'success');
    }

    public function get_my_order(Request $request)
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
    }
}
