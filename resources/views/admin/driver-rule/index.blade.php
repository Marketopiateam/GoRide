@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.driverRule.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('driver_rule_create')
                    <a class="btn btn-indigo" href="{{ route('admin.driver-rules.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.driverRule.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('driver-rule.index')

    </div>
</div>
@endsection