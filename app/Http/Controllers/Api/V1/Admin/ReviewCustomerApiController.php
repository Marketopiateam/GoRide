<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewCustomerRequest;
use App\Http\Requests\UpdateReviewCustomerRequest;
use App\Http\Resources\Admin\ReviewCustomerResource;
use App\Models\ReviewCustomer;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReviewCustomerApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('review_customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReviewCustomerResource(ReviewCustomer::with(['customer', 'driver'])->get());
    }

    public function store(StoreReviewCustomerRequest $request)
    {
        $reviewCustomer = ReviewCustomer::create($request->validated());

        return (new ReviewCustomerResource($reviewCustomer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ReviewCustomer $reviewCustomer)
    {
        abort_if(Gate::denies('review_customer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReviewCustomerResource($reviewCustomer->load(['customer', 'driver']));
    }

    public function update(UpdateReviewCustomerRequest $request, ReviewCustomer $reviewCustomer)
    {
        $reviewCustomer->update($request->validated());

        return (new ReviewCustomerResource($reviewCustomer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ReviewCustomer $reviewCustomer)
    {
        abort_if(Gate::denies('review_customer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reviewCustomer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
