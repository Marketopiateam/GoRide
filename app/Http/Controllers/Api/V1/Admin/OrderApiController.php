<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Service;
use App\Events\TripCreated;
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

    public function neworder(StoreOrderRequest $request)
    {
        $data =[
             'service_id'        => $request->service_id??'',
             'driver_id'         => null,
             'distance'          => $request->distance??'',
             'distance_type'     => 'km',
            //  'payment_type'      => $request->payment_type??'',
             'destination_name'  => $request->destination_name??'',
             'destination_lat'   => $request->destination_lat??'',
             'destination_long'  => $request->destination_long??'',
             'source_name'       => $request->source_name??'',
             'source_lat'        => $request->source_lat??'',
             'source_long'       => $request->source_long??'',
             'offer_rate'        => $request->offer_rate??'',
             'final_rate'        => $request->final_rate??'',
             'user_id'           => Auth::user()->id,
        ];
       $order = Order::create( $data);
        TripCreated::dispatch($order );
        return Resp('','success');
    }
    public function startorder(Request $request,Order $order)
    {
        $order->update(['accepted_driver'=>Carbon::now()]);
        TripCreated::dispatch($order );
        return Resp('','success');
    }
    public function acceptorder(Request $request,Order $order)
    {
        $order->update(['is_accept'=>Carbon::now(),'driver_id'=>Auth::user()->id]);
        TripCreated::dispatch($order );
        return Resp('','success');
    }
    public function endorder(Request $request,Order $order)
    {
        $order->update(['is_end'=>Carbon::now()]);
        TripCreated::dispatch($order );
        return Resp('','success');
    }

    public function get_my_order(Request $request)
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
    }
}
