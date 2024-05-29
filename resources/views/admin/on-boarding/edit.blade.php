@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.onBoarding.title_singular') }}:
                    {{ trans('cruds.onBoarding.fields.id') }}
                    {{ $onBoarding->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('on-boarding.edit', [$onBoarding])
        </div>
    </div>
</div>
@endsection