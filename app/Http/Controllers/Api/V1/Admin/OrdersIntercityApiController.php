<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrdersIntercityRequest;
use App\Http\Requests\UpdateOrdersIntercityRequest;
use App\Http\Resources\Admin\OrdersIntercityResource;
use App\Models\OrdersIntercity;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdersIntercityApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('orders_intercity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OrdersIntercityResource(OrdersIntercity::with(['driver', 'intercityservice', 'user'])->get());
    }

    public function store(StoreOrdersIntercityRequest $request)
    {
        $ordersIntercity = OrdersIntercity::create($request->validated());

        return (new OrdersIntercityResource($ordersIntercity))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(OrdersIntercity $ordersIntercity)
    {
        abort_if(Gate::denies('orders_intercity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OrdersIntercityResource($ordersIntercity->load(['driver', 'intercityservice', 'user']));
    }

    public function update(UpdateOrdersIntercityRequest $request, OrdersIntercity $ordersIntercity)
    {
        $ordersIntercity->update($request->validated());

        return (new OrdersIntercityResource($ordersIntercity))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(OrdersIntercity $ordersIntercity)
    {
        abort_if(Gate::denies('orders_intercity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ordersIntercity->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
