<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReferralController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('referral_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.referral.index');
    }

    public function create()
    {
        abort_if(Gate::denies('referral_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.referral.create');
    }

    public function edit(Referral $referral)
    {
        abort_if(Gate::denies('referral_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.referral.edit', compact('referral'));
    }

    public function show(Referral $referral)
    {
        abort_if(Gate::denies('referral_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.referral.show', compact('referral'));
    }
}
