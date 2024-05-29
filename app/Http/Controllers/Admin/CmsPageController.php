<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CmsPageController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cms_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cms-page.index');
    }

    public function create()
    {
        abort_if(Gate::denies('cms_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cms-page.create');
    }

    public function edit(CmsPage $cmsPage)
    {
        abort_if(Gate::denies('cms_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cms-page.edit', compact('cmsPage'));
    }

    public function show(CmsPage $cmsPage)
    {
        abort_if(Gate::denies('cms_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.cms-page.show', compact('cmsPage'));
    }
}
