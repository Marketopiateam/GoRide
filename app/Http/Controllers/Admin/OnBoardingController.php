<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnBoarding;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OnBoardingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('on_boarding_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.on-boarding.index');
    }

    public function create()
    {
        abort_if(Gate::denies('on_boarding_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.on-boarding.create');
    }

    public function edit(OnBoarding $onBoarding)
    {
        abort_if(Gate::denies('on_boarding_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.on-boarding.edit', compact('onBoarding'));
    }

    public function show(OnBoarding $onBoarding)
    {
        abort_if(Gate::denies('on_boarding_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.on-boarding.show', compact('onBoarding'));
    }
}
