@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.driverUser.title_singular') }}:
                    {{ trans('cruds.driverUser.fields.id') }}
                    {{ $driverUser->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('driver-user.edit', [$driverUser])
        </div>
    </div>
</div>
@endsection