<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\So;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('so_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.so.index');
    }

    public function create()
    {
        abort_if(Gate::denies('so_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.so.create');
    }

    public function edit(So $so)
    {
        abort_if(Gate::denies('so_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.so.edit', compact('so'));
    }

    public function show(So $so)
    {
        abort_if(Gate::denies('so_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $so->load('order');

        return view('admin.so.show', compact('so'));
    }
}
