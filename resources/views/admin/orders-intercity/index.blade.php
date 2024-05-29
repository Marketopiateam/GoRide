@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.ordersIntercity.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('orders_intercity_create')
                    <a class="btn btn-indigo" href="{{ route('admin.orders-intercities.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.ordersIntercity.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('orders-intercity.index')

    </div>
</div>
@endsection