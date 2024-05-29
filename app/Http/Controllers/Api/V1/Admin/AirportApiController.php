<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;
use App\Http\Resources\Admin\AirportResource;
use App\Models\Airport;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AirportApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('airport_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AirportResource(Airport::all());
    }

    public function store(StoreAirportRequest $request)
    {
        $airport = Airport::create($request->validated());

        return (new AirportResource($airport))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Airport $airport)
    {
        abort_if(Gate::denies('airport_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AirportResource($airport);
    }

    public function update(UpdateAirportRequest $request, Airport $airport)
    {
        $airport->update($request->validated());

        return (new AirportResource($airport))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Airport $airport)
    {
        abort_if(Gate::denies('airport_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $airport->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
