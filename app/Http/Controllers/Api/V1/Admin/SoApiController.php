<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSoRequest;
use App\Http\Requests\UpdateSoRequest;
use App\Http\Resources\Admin\SoResource;
use App\Models\So;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('so_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SoResource(So::with(['order'])->get());
    }

    public function store(StoreSoRequest $request)
    {
        $so = So::create($request->validated());

        return (new SoResource($so))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(So $so)
    {
        abort_if(Gate::denies('so_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SoResource($so->load(['order']));
    }

    public function update(UpdateSoRequest $request, So $so)
    {
        $so->update($request->validated());

        return (new SoResource($so))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(So $so)
    {
        abort_if(Gate::denies('so_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $so->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
