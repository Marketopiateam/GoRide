<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReviewCustomer;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReviewCustomerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('review_customer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-customer.index');
    }

    public function create()
    {
        abort_if(Gate::denies('review_customer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-customer.create');
    }

    public function edit(ReviewCustomer $reviewCustomer)
    {
        abort_if(Gate::denies('review_customer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-customer.edit', compact('reviewCustomer'));
    }

    public function show(ReviewCustomer $reviewCustomer)
    {
        abort_if(Gate::denies('review_customer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reviewCustomer->load('customer', 'driver');

        return view('admin.review-customer.show', compact('reviewCustomer'));
    }
}
