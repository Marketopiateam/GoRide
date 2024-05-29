<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreightVehicle;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FreightVehicleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('freight_vehicle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freight-vehicle.index');
    }

    public function create()
    {
        abort_if(Gate::denies('freight_vehicle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freight-vehicle.create');
    }

    public function edit(FreightVehicle $freightVehicle)
    {
        abort_if(Gate::denies('freight_vehicle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freight-vehicle.edit', compact('freightVehicle'));
    }

    public function show(FreightVehicle $freightVehicle)
    {
        abort_if(Gate::denies('freight_vehicle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freight-vehicle.show', compact('freightVehicle'));
    }
}
