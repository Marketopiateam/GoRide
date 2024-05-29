<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DriverDocument;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DriverDocumentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('driver_document_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-document.index');
    }

    public function create()
    {
        abort_if(Gate::denies('driver_document_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-document.create');
    }

    public function edit(DriverDocument $driverDocument)
    {
        abort_if(Gate::denies('driver_document_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-document.edit', compact('driverDocument'));
    }

    public function show(DriverDocument $driverDocument)
    {
        abort_if(Gate::denies('driver_document_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.driver-document.show', compact('driverDocument'));
    }
}
