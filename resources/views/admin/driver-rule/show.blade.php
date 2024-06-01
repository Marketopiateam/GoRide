@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.driverRule.title_singular') }}:
                    {{ trans('cruds.driverRule.fields.id') }}
                    {{ $driverRule->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.driverRule.fields.id') }}
                            </th>
                            <td>
                                {{ $driverRule->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverRule.fields.enable') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $driverRule->enable ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverRule.fields.is_deleted') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $driverRule->is_deleted ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverRule.fields.name') }}
                            </th>
                            <td>
                                {{ $driverRule->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverRule.fields.image') }}
                            </th>
                            <td>
                                @foreach($driverRule->image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('driver_rule_edit')
                    <a href="{{ route('admin.driver-rules.edit', $driverRule) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.driver-rules.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection