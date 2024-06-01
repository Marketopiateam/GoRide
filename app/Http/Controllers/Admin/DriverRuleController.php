<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DriverRule;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverRuleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('driver_rule_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-rule.index');
    }

    public function create()
    {
        abort_if(Gate::denies('driver_rule_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-rule.create');
    }

    public function edit(DriverRule $driverRule)
    {
        abort_if(Gate::denies('driver_rule_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-rule.edit', compact('driverRule'));
    }

    public function show(DriverRule $driverRule)
    {
        abort_if(Gate::denies('driver_rule_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-rule.show', compact('driverRule'));
    }
}
