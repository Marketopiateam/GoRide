<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IntercityService;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IntercityServiceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('intercity_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intercity-service.index');
    }

    public function create()
    {
        abort_if(Gate::denies('intercity_service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intercity-service.create');
    }

    public function edit(IntercityService $intercityService)
    {
        abort_if(Gate::denies('intercity_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intercity-service.edit', compact('intercityService'));
    }

    public function show(IntercityService $intercityService)
    {
        abort_if(Gate::denies('intercity_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intercity-service.show', compact('intercityService'));
    }
}
