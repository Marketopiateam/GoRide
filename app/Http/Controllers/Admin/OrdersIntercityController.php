<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrdersIntercity;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdersIntercityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('orders_intercity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orders-intercity.index');
    }

    public function create()
    {
        abort_if(Gate::denies('orders_intercity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orders-intercity.create');
    }

    public function edit(OrdersIntercity $ordersIntercity)
    {
        abort_if(Gate::denies('orders_intercity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.orders-intercity.edit', compact('ordersIntercity'));
    }

    public function show(OrdersIntercity $ordersIntercity)
    {
        abort_if(Gate::denies('orders_intercity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ordersIntercity->load('driver', 'intercityservice', 'user');

        return view('admin.orders-intercity.show', compact('ordersIntercity'));
    }
}
