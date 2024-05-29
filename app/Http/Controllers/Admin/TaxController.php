<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaxController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('tax_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tax.index');
    }

    public function create()
    {
        abort_if(Gate::denies('tax_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tax.create');
    }

    public function edit(Tax $tax)
    {
        abort_if(Gate::denies('tax_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tax.edit', compact('tax'));
    }

    public function show(Tax $tax)
    {
        abort_if(Gate::denies('tax_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tax.show', compact('tax'));
    }
}
