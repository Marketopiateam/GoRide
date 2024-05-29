@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.cmsPage.title_singular') }}:
                    {{ trans('cruds.cmsPage.fields.id') }}
                    {{ $cmsPage->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('cms-page.edit', [$cmsPage])
        </div>
    </div>
</div>
@endsection