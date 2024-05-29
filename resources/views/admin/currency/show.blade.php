@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.currency.title_singular') }}:
                    {{ trans('cruds.currency.fields.id') }}
                    {{ $currency->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.id') }}
                            </th>
                            <td>
                                {{ $currency->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.code') }}
                            </th>
                            <td>
                                {{ $currency->code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.decimal_digits') }}
                            </th>
                            <td>
                                {{ $currency->decimal_digits }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.enable') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $currency->enable ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.name') }}
                            </th>
                            <td>
                                {{ $currency->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.symbol') }}
                            </th>
                            <td>
                                {{ $currency->symbol }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currency.fields.symbol_at_right') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $currency->symbol_at_right ? 'checked' : '' }}>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('currency_edit')
                    <a href="{{ route('admin.currencies.edit', $currency) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.currencies.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection