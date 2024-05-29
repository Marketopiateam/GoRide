@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.so.title_singular') }}:
                    {{ trans('cruds.so.fields.id') }}
                    {{ $so->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.so.fields.id') }}
                            </th>
                            <td>
                                {{ $so->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.so.fields.order') }}
                            </th>
                            <td>
                                @if($so->order)
                                    <span class="badge badge-relationship">{{ $so->order->source_location_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.so.fields.order_type') }}
                            </th>
                            <td>
                                {{ $so->order_type }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.so.fields.status') }}
                            </th>
                            <td>
                                {{ $so->status }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('so_edit')
                    <a href="{{ route('admin.sos.edit', $so) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.sos.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection