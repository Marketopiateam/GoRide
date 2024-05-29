@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.referral.title_singular') }}:
                    {{ trans('cruds.referral.fields.id') }}
                    {{ $referral->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('referral.edit', [$referral])
        </div>
    </div>
</div>
@endsection