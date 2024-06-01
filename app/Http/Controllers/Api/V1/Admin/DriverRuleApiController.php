<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDriverRuleRequest;
use App\Http\Requests\UpdateDriverRuleRequest;
use App\Http\Resources\Admin\DriverRuleResource;
use App\Models\DriverRule;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverRuleApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('driver_rule_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DriverRuleResource(DriverRule::all());
    }

    public function store(StoreDriverRuleRequest $request)
    {
        $driverRule = DriverRule::create($request->validated());

        return (new DriverRuleResource($driverRule))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DriverRule $driverRule)
    {
        abort_if(Gate::denies('driver_rule_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DriverRuleResource($driverRule);
    }

    public function update(UpdateDriverRuleRequest $request, DriverRule $driverRule)
    {
        $driverRule->update($request->validated());

        return (new DriverRuleResource($driverRule))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DriverRule $driverRule)
    {
        abort_if(Gate::denies('driver_rule_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $driverRule->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
