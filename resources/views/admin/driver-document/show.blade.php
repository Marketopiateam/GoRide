@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.driverDocument.title_singular') }}:
                    {{ trans('cruds.driverDocument.fields.id') }}
                    {{ $driverDocument->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.driverDocument.fields.id') }}
                            </th>
                            <td>
                                {{ $driverDocument->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.driverDocument.fields.documents') }}
                            </th>
                            <td>
                                {{ $driverDocument->documents }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('driver_document_edit')
                    <a href="{{ route('admin.driver-documents.edit', $driverDocument) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.driver-documents.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection