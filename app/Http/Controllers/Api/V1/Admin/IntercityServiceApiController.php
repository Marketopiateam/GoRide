<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadTrait;
use App\Http\Requests\StoreIntercityServiceRequest;
use App\Http\Requests\UpdateIntercityServiceRequest;
use App\Http\Resources\Admin\IntercityServiceResource;
use App\Models\IntercityService;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IntercityServiceApiController extends Controller
{
    use MediaUploadTrait;

    public function index()
    {
        abort_if(Gate::denies('intercity_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IntercityServiceResource(IntercityService::all());
    }

    public function store(StoreIntercityServiceRequest $request)
    {
        $intercityService = IntercityService::create($request->validated());

        if ($request->input('intercity_service_image', false)) {
            $intercityService->addMedia(storage_path('tmp/uploads/' . basename($request->input('intercity_service_image'))))->toMediaCollection('intercity_service_image');
        }

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

        if ($request->input('intercity_service_image', false)) {
            if (! $intercityService->intercity_service_image || $request->input('intercity_service_image') !== $intercityService->intercity_service_image->file_name) {
                if ($intercityService->intercity_service_image) {
                    $intercityService->intercity_service_image->delete();
                }
                $intercityService->addMedia(storage_path('tmp/uploads/' . basename($request->input('intercity_service_image'))))->toMediaCollection('intercity_service_image');
            }
        } elseif ($intercityService->intercity_service_image) {
            $intercityService->intercity_service_image->delete();
        }

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
