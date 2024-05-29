@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.cmsPage.title_singular') }}:
                    {{ trans('cruds.cmsPage.fields.id') }}
                    {{ $cmsPage->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.cmsPage.fields.id') }}
                            </th>
                            <td>
                                {{ $cmsPage->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cmsPage.fields.name') }}
                            </th>
                            <td>
                                {{ $cmsPage->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cmsPage.fields.publish') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $cmsPage->publish ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cmsPage.fields.slug') }}
                            </th>
                            <td>
                                {{ $cmsPage->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.cmsPage.fields.description') }}
                            </th>
                            <td>
                                {{ $cmsPage->description }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('cms_page_edit')
                    <a href="{{ route('admin.cms-pages.edit', $cmsPage) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.cms-pages.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection