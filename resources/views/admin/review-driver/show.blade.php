@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.reviewDriver.title_singular') }}:
                    {{ trans('cruds.reviewDriver.fields.id') }}
                    {{ $reviewDriver->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.id') }}
                            </th>
                            <td>
                                {{ $reviewDriver->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.comment') }}
                            </th>
                            <td>
                                {{ $reviewDriver->comment }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.customer') }}
                            </th>
                            <td>
                                @if($reviewDriver->customer)
                                    <span class="badge badge-relationship">{{ $reviewDriver->customer->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.driver') }}
                            </th>
                            <td>
                                @if($reviewDriver->driver)
                                    <span class="badge badge-relationship">{{ $reviewDriver->driver->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.rating') }}
                            </th>
                            <td>
                                {{ $reviewDriver->rating }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.reviewDriver.fields.type') }}
                            </th>
                            <td>
                                {{ $reviewDriver->type }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('review_driver_edit')
                    <a href="{{ route('admin.review-drivers.edit', $reviewDriver) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.review-drivers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection