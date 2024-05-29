<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewDriverRequest;
use App\Http\Requests\UpdateReviewDriverRequest;
use App\Http\Resources\Admin\ReviewDriverResource;
use App\Models\ReviewDriver;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReviewDriverApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('review_driver_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReviewDriverResource(ReviewDriver::with(['customer', 'driver'])->get());
    }

    public function store(StoreReviewDriverRequest $request)
    {
        $reviewDriver = ReviewDriver::create($request->validated());

        return (new ReviewDriverResource($reviewDriver))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ReviewDriver $reviewDriver)
    {
        abort_if(Gate::denies('review_driver_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReviewDriverResource($reviewDriver->load(['customer', 'driver']));
    }

    public function update(UpdateReviewDriverRequest $request, ReviewDriver $reviewDriver)
    {
        $reviewDriver->update($request->validated());

        return (new ReviewDriverResource($reviewDriver))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ReviewDriver $reviewDriver)
    {
        abort_if(Gate::denies('review_driver_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reviewDriver->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
