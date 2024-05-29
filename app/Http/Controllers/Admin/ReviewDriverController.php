<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReviewDriver;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReviewDriverController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('review_driver_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-driver.index');
    }

    public function create()
    {
        abort_if(Gate::denies('review_driver_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-driver.create');
    }

    public function edit(ReviewDriver $reviewDriver)
    {
        abort_if(Gate::denies('review_driver_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.review-driver.edit', compact('reviewDriver'));
    }

    public function show(ReviewDriver $reviewDriver)
    {
        abort_if(Gate::denies('review_driver_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reviewDriver->load('customer', 'driver');

        return view('admin.review-driver.show', compact('reviewDriver'));
    }
}
