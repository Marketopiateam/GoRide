@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.driverDocument.title_singular') }}:
                    {{ trans('cruds.driverDocument.fields.id') }}
                    {{ $driverDocument->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('driver-document.edit', [$driverDocument])
        </div>
    </div>
</div>
@endsection