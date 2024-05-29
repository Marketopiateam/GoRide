<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DriverUser;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverUserController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('driver_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-user.index');
    }

    public function create()
    {
        abort_if(Gate::denies('driver_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-user.create');
    }

    public function edit(DriverUser $driverUser)
    {
        abort_if(Gate::denies('driver_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-user.edit', compact('driverUser'));
    }

    public function show(DriverUser $driverUser)
    {
        abort_if(Gate::denies('driver_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-user.show', compact('driverUser'));
    }
}
