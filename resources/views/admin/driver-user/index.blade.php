@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.driverUser.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('driver_user_create')
                    <a class="btn btn-indigo" href="{{ route('admin.driver-users.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.driverUser.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('driver-user.index')

    </div>
</div>
@endsection