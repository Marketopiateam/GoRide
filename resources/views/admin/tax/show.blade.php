@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.tax.title_singular') }}:
                    {{ trans('cruds.tax.fields.id') }}
                    {{ $tax->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.id') }}
                            </th>
                            <td>
                                {{ $tax->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.country') }}
                            </th>
                            <td>
                                {{ $tax->country }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.enable') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $tax->enable ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.tax') }}
                            </th>
                            <td>
                                {{ $tax->tax }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.title') }}
                            </th>
                            <td>
                                {{ $tax->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.tax.fields.type') }}
                            </th>
                            <td>
                                {{ $tax->type }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('tax_edit')
                    <a href="{{ route('admin.taxes.edit', $tax) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.taxes.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection