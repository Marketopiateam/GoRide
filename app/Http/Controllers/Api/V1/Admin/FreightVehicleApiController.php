<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFreightVehicleRequest;
use App\Http\Requests\UpdateFreightVehicleRequest;
use App\Http\Resources\Admin\FreightVehicleResource;
use App\Models\FreightVehicle;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FreightVehicleApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('freight_vehicle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FreightVehicleResource(FreightVehicle::all());
    }

    public function store(StoreFreightVehicleRequest $request)
    {
        $freightVehicle = FreightVehicle::create($request->validated());

        return (new FreightVehicleResource($freightVehicle))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FreightVehicle $freightVehicle)
    {
        abort_if(Gate::denies('freight_vehicle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FreightVehicleResource($freightVehicle);
    }

    public function update(UpdateFreightVehicleRequest $request, FreightVehicle $freightVehicle)
    {
        $freightVehicle->update($request->validated());

        return (new FreightVehicleResource($freightVehicle))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FreightVehicle $freightVehicle)
    {
        abort_if(Gate::denies('freight_vehicle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freightVehicle->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
