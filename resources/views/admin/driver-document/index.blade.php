@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.driverDocument.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('driver_document_create')
                    <a class="btn btn-indigo" href="{{ route('admin.driver-documents.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.driverDocument.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('driver-document.index')

    </div>
</div>
@endsection