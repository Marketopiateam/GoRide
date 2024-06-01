<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIntercityServiceRequest;
use App\Http\Requests\UpdateIntercityServiceRequest;
use App\Http\Resources\Admin\IntercityServiceResource;
use App\Models\IntercityService;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IntercityServiceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('intercity_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IntercityServiceResource(IntercityService::all());
    }

    public function store(StoreIntercityServiceRequest $request)
    {
        $intercityService = IntercityService::create($request->validated());

        return (new IntercityServiceResource($intercityService))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(IntercityService $intercityService)
    {
        abort_if(Gate::denies('intercity_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IntercityServiceResource($intercityService);
    }

    public function update(UpdateIntercityServiceRequest $request, IntercityService $intercityService)
    {
        $intercityService->update($request->validated());

        return (new IntercityServiceResource($intercityService))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(IntercityService $intercityService)
    {
        abort_if(Gate::denies('intercity_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $intercityService->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
