@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.onBoarding.title_singular') }}:
                    {{ trans('cruds.onBoarding.fields.id') }}
                    {{ $onBoarding->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.onBoarding.fields.id') }}
                            </th>
                            <td>
                                {{ $onBoarding->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.onBoarding.fields.description') }}
                            </th>
                            <td>
                                {{ $onBoarding->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.onBoarding.fields.image') }}
                            </th>
                            <td>
                                {{ $onBoarding->image }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.onBoarding.fields.title') }}
                            </th>
                            <td>
                                {{ $onBoarding->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.onBoarding.fields.type') }}
                            </th>
                            <td>
                                {{ $onBoarding->type }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('on_boarding_edit')
                    <a href="{{ route('admin.on-boardings.edit', $onBoarding) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.on-boardings.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection