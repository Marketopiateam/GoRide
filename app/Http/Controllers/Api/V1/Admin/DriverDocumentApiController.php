<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDriverDocumentRequest;
use App\Http\Requests\UpdateDriverDocumentRequest;
use App\Http\Resources\Admin\DriverDocumentResource;
use App\Models\DriverDocument;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverDocumentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('driver_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DriverDocumentResource(DriverDocument::all());
    }

    public function store(StoreDriverDocumentRequest $request)
    {
        $driverDocument = DriverDocument::create($request->validated());

        return (new DriverDocumentResource($driverDocument))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DriverDocument $driverDocument)
    {
        abort_if(Gate::denies('driver_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DriverDocumentResource($driverDocument);
    }

    public function update(UpdateDriverDocumentRequest $request, DriverDocument $driverDocument)
    {
        $driverDocument->update($request->validated());

        return (new DriverDocumentResource($driverDocument))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DriverDocument $driverDocument)
    {
        abort_if(Gate::denies('driver_document_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $driverDocument->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
