<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferralRequest;
use App\Http\Requests\UpdateReferralRequest;
use App\Http\Resources\Admin\ReferralResource;
use App\Models\Referral;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReferralApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('referral_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReferralResource(Referral::all());
    }

    public function store(StoreReferralRequest $request)
    {
        $referral = Referral::create($request->validated());

        return (new ReferralResource($referral))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Referral $referral)
    {
        abort_if(Gate::denies('referral_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReferralResource($referral);
    }

    public function update(UpdateReferralRequest $request, Referral $referral)
    {
        $referral->update($request->validated());

        return (new ReferralResource($referral))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Referral $referral)
    {
        abort_if(Gate::denies('referral_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $referral->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
