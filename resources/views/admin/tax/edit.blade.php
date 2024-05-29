@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.tax.title_singular') }}:
                    {{ trans('cruds.tax.fields.id') }}
                    {{ $tax->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('tax.edit', [$tax])
        </div>
    </div>
</div>
@endsection